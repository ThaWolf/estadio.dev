<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SportSeeder::class);
        $this->call(SportPlayerSeeder::class);
        $this->call(TournamentSeeder::class);
    }
}
