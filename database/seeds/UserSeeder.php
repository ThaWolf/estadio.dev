<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
            'name' => 'admin',
	        'email' => 'admin@fake.com',
	        'password' => bcrypt('1234')
        ]);
        foreach(range(1, 10) as $index) {
        	$userName = 'user_'. $index;
            User::create([
                'name' => $userName,
		        'email' => $userName.'@fake.com',
		        'password' => bcrypt('1234')
            ]);
        }
    }
}
