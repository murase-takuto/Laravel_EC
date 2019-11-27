<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		//admin
		$user = User::create([
			'name' => 'web管理責任者',
			'email' => 'admin@gmail.com',
			'password' => Hash::make('admin'),
		]);
		$user->assignRole('admin');
		//user
		$user = User::create([
			'name' => 'ユーザー',
			'email' => 'customer@gmail.com',
			'password' => Hash::make('user'),
		]);
		$user->assignRole('user');
    }
}
