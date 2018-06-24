<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// Gerardo
		$gerardo=User::create(array(
			'name' => 'Gerardo Pacheco',
			'email' => 'gerarpacheco@gmail.com',
			'password' => '123456',
			'telefono' => '940233114',
		));
		$gerardo->roles()->sync([1]);
	
	}
}