<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Roles')->delete();

		// Administrador
		Role::create(array(
			'name' => 'admin',
			'display_name' => 'Administrador',
			'description' => 'Administrador'
		));

		// Gerente
		Role::create(array(
			'name' => 'gerente',
			'display_name' => 'Gerente',
			'description' => 'Gerente'
		));

		// Gerente
		Role::create(array(
			'name' => 'vendedor',
			'display_name' => 'Vendedor',
			'description' => 'Vendedor'
		));
	}
}