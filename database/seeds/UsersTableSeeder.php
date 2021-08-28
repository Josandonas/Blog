<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{

    public function run(){
    	 DB::table('users')->insert([
            'name' => 'José Sandonas',
            'email' => 'josandonas98@gmail.com',
            'password' => bcrypt('hahahaha'),
            'role'=> 'Admin'
        ]);
    }
}
