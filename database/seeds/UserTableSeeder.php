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
			'email' => 'gpacheco@ingebits.com',
			'password' => '123456',
		));
		$gerardo->roles()->sync([1]);
	
	}
}