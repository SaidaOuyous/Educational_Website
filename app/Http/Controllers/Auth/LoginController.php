<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request; // Make sure to import the Request class

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo1 = RouteServiceProvider::IDS;

    protected $redirectTo2 = RouteServiceProvider::SI;
    protected $redirectTo3 = RouteServiceProvider::ERP;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
    {
        // Check the user's degree and redirect them accordingly
        if ($user->degree === 'IDS') {
            return redirect($this->redirectTo1);
        } elseif ($user->degree === 'IS') {
            return redirect($this->redirectTo2);
        } elseif ($user->degree === 'ERP') {
            return redirect($this->redirectTo3);
        } else {
            // Handle other degrees or a default redirect
            return redirect($this->redirectTo);
        }
    }
}
