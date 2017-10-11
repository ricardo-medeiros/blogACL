<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    //usando autenticação personalizada
    public function login(){
        $credentials = Request::only('email','password');
        
        if (Auth::attempt($credentials)){
            Auth::validate();
            return redirect('/home');
        }
        return redirect('login')
                ->withInput(Request::only('email'))
                ->withErrors(['password' => 'Login ou senha incorretos!']);
                 
    }
    //usando logout personalizado
    public function logout(){
                
        Auth::logout();
        return redirect('/');
    }
}
