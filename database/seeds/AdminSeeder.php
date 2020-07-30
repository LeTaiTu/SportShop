<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
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
    			'name' => 'admin',
    			'username' => 'admin',
    			'email' => 'admin@gmail.com',
    			'password' => bcrypt('123456'),
    			
    		],
            [
                'name' => 'admin1',
                'username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456'),
                
            ]);
    }
}
