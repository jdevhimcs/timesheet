<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Projects;
use App\ProjectAssignment;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = \Auth::user()->roles[0]->id;
        if($role == 1) {
            return view('dashboard');
        }else{
            return redirect("/")->withMyerror("You are not authorized for this action");
        }
    }

    public function userdashboard()
    {
        $role = \Auth::user()->roles[0]->id;
        switch ($role) {
            case '1':
                return redirect()->route('dashboard');
            break;          
            default:
                $data =array();
                $data['myprojects'] = ProjectAssignment::where('user_id',Auth::id())->where('status','accept')->count();
                return view('frontEnd.userdashboard',$data);
            break;
        }
        
    }

    public function mynotification()
    {
        $data =array();
        $data['notifications'] = ProjectAssignment::with(['author','project'])->where('user_id',Auth::id())->where('status','pending')->orderBy('id', 'DESC')->get();
        return view('frontEnd.my-notification',$data);
    }     
}
