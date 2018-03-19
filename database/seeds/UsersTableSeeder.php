<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $memberRole 		= Role::where('name', '=', 'Member')->first();
        $adminRole 			= Role::where('name', '=', 'Admin')->first();
        $moderatorRole		= Role::where('name', '=', 'Moderator')->first();
        $bannedRole 		= Role::where('name', '=', 'Banned')->first();
		$permissions 		= Permission::all();

	    /**
	     * Add Users
	     *
	     */
        if (User::where('email', '=', 'patrickisabirye71@gmail.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Admin',
	            'email' => 'patrickisabirye71@gmail.com',
	            'password' => bcrypt('isabiryeisabirye'),
	        ]);

	        $newUser->attachRole($adminRole);
			foreach ($permissions as $permission) {
				$newUser->attachPermission($permission);
			}

        }

        if (User::where('email', '=', 'user@user.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'User',
	            'email' => 'user@user.com',
	            'password' => bcrypt('password'),
	        ]);

	        $newUser;
	        $newUser->attachRole($memberRole);

        }

    }
}