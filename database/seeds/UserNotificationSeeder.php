<?php

use Illuminate\Database\Seeder;

use App\User;
use App\UserNotification;

class UserNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all()->first();
        UserNotification::create([
        	'user_id' => $user->id,
        	'description' => 'Notificacion de test'
        ]);
        UserNotification::create([
        	'user_id' => $user->id,
        	'description' => 'Notificacion con link',
        	'link' => 'http://google.com'
        ]);
    }
}
