<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	[
        		'name'=>'Admin',
        		'email'=>'admin.11@my.com',
        		'is_admin'=>'1',
        		'password'=>bcrypt('123456'),
        	],
        	[
        		'name'=>'User',
        		'email'=>'user.12@my.com',
        		'is_admin'=>'0',
        		'password'=>bcrypt('123456'),
        	],
        ];
        foreach ($user as $key => $value) {
        	# code...
        	User::create($value);
        }
    }
}
