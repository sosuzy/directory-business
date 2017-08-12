<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
        public function authenticated()
{
    if(auth()->user()->hasRole('manager'))
        {
        return redirect('/admin');
    } 
    elseif (auth()->user()->hasRole('publisher')) {
        return redirect('/publisher');
    }
     elseif (auth()->user()->hasRole('agent')) {
        return redirect('/agent');
    }
        return redirect('/home');
}


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
