<?php

use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

use App\Sport;
use App\SportPlayer;

class SportPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$sport_ids = collect(range(1,2));
        foreach(range(2, 11) as $index) {
        	$sport_id = $sport_ids->random();
        	SportPlayer::create([
        		'user_id' => $index,
        		'sport_id' => $sport_id,
        		'name' => $sport_id. '_for_user_'.$index,
        		'private_name' => $sport_id. '_for_user_'.$index
        	]);
        }
    }
}
