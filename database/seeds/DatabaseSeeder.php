<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//User::unguard();
		User::create([
			'name' => 'admin',
			'email' => 'admin@admin.aa',
			'password' => bcrypt('666666'),
		]);

		// $this->call('UserTableSeeder');
	}

}
