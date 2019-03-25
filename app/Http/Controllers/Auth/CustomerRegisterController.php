<?php

namespace App\Http\Controllers\Auth;

use App\CustomerModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Auth\Events\Registered;

class CustomerRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

   /**
     * Where to redirect users after registration.
     *
     * @var string
     */

  
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view ('auth.customers.cust-register');
    } 
    
    public function redirectTo()
    {
        return 'customer/home';
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $data = ['name' => $request->name, 'email' => $request-> email, 'password' => $request->password];

        $this->validator ($data);

        $register = CustomerModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

     if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
      {
           return redirect()->intended(route('customer.home'));
      }
        else {
            return redirect('/customer');
        }
    }


}
