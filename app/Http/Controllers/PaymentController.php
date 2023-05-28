<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Paypal;
use App\User;
use App\AccountCredit;

class PaymentController extends Controller
{
    private $_api_context;
    
    public function __construct()
    {
            
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    public function payWithPaypal()
    {
        return view('paywithpaypal');
    }

    public function postPaymentWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

    	$item_1 = new Item();

        $item_1->setName('Purchage Credits')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount'));

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Payment for buy credit to puchage lead.');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('paypal.status'))
            ->setCancelUrl(URL::route('paypal.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));            
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {

                \Session::put('error','Connection timeout');

                return Redirect::route('mynotification');                
            } else {

                \Session::put('error','Some error occur, sorry for inconvenient');

                return Redirect::route('mynotification');                
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        
        Session::put('paypal_payment_id', $payment->getId());

        $transaction_data = new paypal();
        $transaction_data->transaction_id = $payment->getId();
        $transaction_data->product_name   = 'Purchage Credits';
        $transaction_data->amount   	  = $request->get('amount');
        $transaction_data->create_user	  = Auth::id();
        $transaction_data->save();

        if(isset($redirect_url)) {            
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
    	return Redirect::route('mynotification');
    }

    public function getPaymentStatus(Request $request)
    {        
        $payment_id = Session::get('paypal_payment_id') ?? $request->input('paymentId');

        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error','Payment failed');
            return Redirect::route('mynotification');
        }

        $payment = Payment::get($payment_id, $this->_api_context);        
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));        
        $result = $payment->execute($execution, $this->_api_context);

        $transaction_data = Paypal::where('transaction_id',$request->input('paymentId'))->first();

        if(strtolower($payment->state) == 'approved'){

        	$transaction_data->status = 'success';

        }else{

        	$transaction_data->status = 'failed';

        }

        $transaction_data->email 		= $result->payer->payer_info->email;
        $transaction_data->first_name 	= $result->payer->payer_info->first_name;
        $transaction_data->last_name 	= $result->payer->payer_info->last_name;
        $transaction_data->country_code = $result->payer->payer_info->country_code;
        $transaction_data->json_response = serialize($result);
        

        if($transaction_data->status == 'success'){

        	$User = User::find(Auth::id());

        	$User->account_credits = (int)$User->account_credits  + (int)$transaction_data->amount / env("CREDIT_PRICE",1);
        	$User->save();

        	// Credit log

        	$log 				= new AccountCredit();
        	$log->credit 		= $transaction_data->amount / env("CREDIT_PRICE",1);
        	$log->log_type 		= 'credit';
        	$log->create_user 	= Auth::id();
        	$log->save();



        }

        $transaction_data->save();
       
        
        if ($result->getState() == 'approved') {  

            \Session::put('success','Payment success !!');
            return Redirect::route('mynotification');

        }

        \Session::put('error','Payment failed !!');
		return Redirect::route('mynotification');
    }
}