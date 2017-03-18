<?php

namespace DeliveryCartagena\Http\Controllers;

use Illuminate\Http\Request;
use DeliveryCartagena\User;

class UserController extends Controller
{
    public function Autenticar(Request $request){
		$email = $request->input("email");
		$pass = $request->input("pass");
		if(User::Autentitacion($email,$pass)){
			//es porque existe y sus datos estan en session
			return redirect('/inicio');
		}else{
			//return "no autentico";
		}
	}
	
	public function Nuevo()
}
