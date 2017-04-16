<?php

namespace DeliveryCartagena;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class User extends Authenticatable
{
	
	public static function Autentitacion($user, $pass){
		$user = DB::table('users')->where([
		['email', $user]
		])->first();
		//dd(Crypt::decrypt($user->password));
		if(Crypt::decrypt($user->password) == $pass){
			//existe
			//colgamos sus datos en la session
			session("user",$user);
			return TRUE;
		}else{
			//no existe
			return FALSE;
		}
		
	}
}
