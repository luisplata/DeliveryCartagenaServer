<?php

use Illuminate\Database\Seeder;
use DeliveryCartagena\User;
use Illuminate\Support\Facades\Crypt;


class TablaUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
		$user->name = "Luis Plata";
		$user->email = "www.luisplata@gmail.com";
		$user->password = Crypt::encrypt("luisplata");
		$user->save();
		
		$user = new User();
		$user->name = "Carlos Castro";
		$user->email = "carloscastro010@gmail.com";
		$user->password = Crypt::encrypt("carloscastro");
		$user->save();
    }
}
