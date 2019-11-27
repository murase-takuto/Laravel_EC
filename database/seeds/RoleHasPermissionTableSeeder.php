<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		//adminについて
		$permissions = [
			'admin_permission',
		];
		$role = Role::findByName('admin');
		$role->givePermissionTo($permissions);
		//userについて
		$permissions = [
			'user_permission',
		];
		$role = Role::findByName('user');
		$role->givePermissionTo($permissions);
    }
}
