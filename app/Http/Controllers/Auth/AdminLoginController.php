<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function_construct(){
    	$this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request){
    	$request->validate([
    		'email'=> 'required|string',
    		'password' => 'required|string',
    	]);
    	$credentials = [
    		'email' => $request->email,
    		'password' =>$request->password,
    	];
    	$status = Auth::guar('admin')->attempt($credentials, $request->remember);

    	if($status) {
    		return redirect()->intended(route('admin'));
    	}

    	return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function index(){
    	return view('auth.login-admin');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('login-admin');
    }
}
