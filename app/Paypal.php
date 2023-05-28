<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paypal extends Model
{
      use SoftDeletes;


      protected $table = 'paypal_payment';

       protected $fillable = [

        'product_name', 'transaction_id','status', 'amount','json_response','created_at','updated_at','deleted_at','create_user',

    ];
}
