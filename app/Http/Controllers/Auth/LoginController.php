<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller{
	public function __construct()
    {
        $this->middleware('guest',['only'=>'showLoginForm']);
    }

    public function showLoginForm(){
        return view('adminlte::auth.login');
    }
	
	public function login(){
		$credenciales = $this->validate(request(),[
			'username' => 'required|string',
			'password' => 'required|string'
		]);
		if(Auth::attempt($credenciales)){
			return redirect('/home');
		}
		return back()->withErrors(['username' => 'Credenciales incorrectas.'])->withInput(request(['username']));
	}

	public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
