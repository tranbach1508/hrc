<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

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

    public function getLogin()
    {
        return view('admins.login.login');
    }

    public function postLogin(Request $request)
    {
        $name=$request->name;
        $password=$request->password;
        $this->validate($request,
            [
                'name' => 'required',
                'password' => 'required|min:6',
            ],
            [
                'name.required' => 'Username không được để chống',
                'password.required' => 'Password không được để chống',
                'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',

            ]
        );

        if( Auth::attempt($request->only('name','password'))){
            return redirect('admin');
        }else{
            return  redirect()->back()->with("thongbao","Tài khoản hoặc mật khẩu không chính xác !")->withInput();
        }
    }
}
