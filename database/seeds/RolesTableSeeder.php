<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /**
	     * Add Roles
	     *
	     */
    	if (Role::where('name', '=', 'Admin')->first() === null) {
	        $adminRole = Role::create([
	            'name' => 'Admin',
	            'slug' => 'admin',
	            'description' => 'Admin Role',
	            'level' => 5,
        	]);
	    }

	    if (Role::where('name', '=', 'Moderator')->first() === null) {
	        $moderatorRole = Role::create([
	            'name' => 'Moderator',
	            'slug' => 'moderator',
	            'description' => 'Moderator Role',
	            'level' => 2,
	        ]);
	    }

	    if (Role::where('name', '=', 'Member')->first() === null) {
	        $memberRole = Role::create([
	            'name' => 'Member',
	            'slug' => 'member',
	            'description' => 'Member Role',
	            'level' => 1,
	        ]);
	    }

    	if (Role::where('name', '=', 'Banned')->first() === null) {
	        $bannedRole = Role::create([
	            'name' => 'Banned',
	            'slug' => 'banned',
	            'description' => 'Banned Role',
	            'level' => 0,
	        ]);
	    }

    }

}