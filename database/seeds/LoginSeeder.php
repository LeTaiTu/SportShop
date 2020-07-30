<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admins')->insert(
    		[
    			'name' => 'admin123',
    			'username' => 'admin123',
    			'email' => 'admin123@gmail.com',
    			'password' => bcrypt('123456')
    			
    		]
        );
    }
}