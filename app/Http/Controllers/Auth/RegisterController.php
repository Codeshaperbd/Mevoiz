<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
use Session;


class RegisterController extends Controller
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|string|min:6|max:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 
        Session::flash('is_active','Please Login');
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'historyUserName' => rand(5000, 999999),
            'historyPassword' => rand(5000, 9000),
            'verifyToken' => Str::random(40),
        ]);

        // $thisUser = User::findOrFail($user->id);
        // $this->sendEmail($thisUser);

        return $user;
    
    }

    // public function sendEmail($thisUser)
    // {
    //     Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    // }

    // public function verifyEmailFirst() 
    // {
    //     return view('email.verifyEmailFirst');
    // }

    // public function sendEmailDone($email,$verifyToken)
    // {
    //     $user = User::where(['email'=>$email, 'verifyToken' => $verifyToken])->first();
    //     if($user){
    //         Session::flash('verified_user','Your Account is verified now.Please login');
    //         User::where(['email'=>$email, 'verifyToken' => $verifyToken])->update(['is_active'=>'1', 'verifyToken'=>NULL]);
    //         return redirect('login');
    //     } else {
    //         return view('email.verified');
    //     }
    // }

}