<?php

use Illuminate\Database\Seeder;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \Illuminate\Support\Facades\DB::table('email_templates')->insert([
			[ 'name' => 'Account Activation','subject' => 'Account Activation','template' => '<!DOCTYPE html>
			<html lang="en">
			<head>
			<meta charset="UTF-8">
			<title>Account Activation </title>
			</head>
			<body>
			<div style="width: 600px; font-family: Arial, Helvetica, sans-serif; margin: 0 auto; border: 1px solid #eee;">
            <div style="width: 100%; padding: 20px 0;font-size: 13px;">
			<h2 style="text-align: center;color: #797979; font-size: 18px; margin-top: 0;">Account Activation </h2>
			<p style="color: #797979; margin:20px 0; line-height: 1.5; padding: 0 20px;">Hi [#NAME#],</p>
			<!-- <p style="color: #797979; margin:10px 0; line-height: 1.5; padding: 0 20px;">Welcome to Oppinn.</p> -->
			<p style="color: #797979; margin:20px 0; line-height: 1.5; padding: 0 20px;">You are one click away from activating your account.</p><p style="color: #797979; margin: 20px 0; line-height: 1.5; padding: 0 20px;"><a href="[#ACTIVATIONURL#]/[#CONFIRMATIONCODE#]" style="background: #41e1d4; padding: 5px 10px;color: #fff;text-decoration: none;border-radius: 5px; font-size: 14px;  ">Verify and Activate</a></p>
			<p style="color: #797979; margin:20px 0 0; line-height: 1.5; padding: 0 20px;">Thanks and Regards,</p>
			</div></div></body></html>','status' => '0','created_at' => \Carbon\Carbon::now()]
       
       	
       	
        ]);
    }
}
