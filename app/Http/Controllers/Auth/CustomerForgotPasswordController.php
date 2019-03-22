<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Passowrd;

class AdminForgotPasswordControllers extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    //protcted function to specify which information to be used 

     protected function brocker()
    {
    	return Password::brocker('admins');
    }


    public function showLinkRequestForm()
    {
    	return view ('auth.passwords.admin-email');
    }
}
