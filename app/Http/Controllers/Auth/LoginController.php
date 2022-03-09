<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

     protected function redirectTo()
     {
        if(Auth()->user()->id == 1)
        {
            return route('admin.dashboard');
        }
        else if(Auth()->user()->id == 2)
        {
            return route('student.dashboard');
        }
         else if(Auth()->user()->id == 3)
        {
            return route('teacher.dashboard');
        }
         else if(Auth()->user()->id == 4)
        {
            return route('parent.dashboard');
        }
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

    public function login(Request $request)
    {
        $input=$request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',

        ]);



        if(Auth()->attempt(array('email'=>$input['email'],'password'=>$input['password'])))
        {
            if( Auth()->user()->id == 1)
            {
                return redirect()->route('admin.dashboard');
            }
            elseif(Auth()->user()->id == 2)
            {
                return redirect()->route('student.dashboard');
            }
             elseif(Auth()->user()->id == 3)
            {
                return redirect()->route('teacher.dashboard');
            }
             elseif(Auth()->user()->id == 4)
            {
                return redirect()->route('parent.dashboard');
            }

        }
        else
        {
            return redirect()->route('login')->with('error','Email and Password are worng');
        }
    }
}
