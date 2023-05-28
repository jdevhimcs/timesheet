<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountCredit extends Model
{
      use SoftDeletes;


      protected $table = 'account_credit_log';

       protected $fillable = [

        'credit', 'log_type','project_id','created_at','updated_at','deleted_at','create_user',

    ];
}
