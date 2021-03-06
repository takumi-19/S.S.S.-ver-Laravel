<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeamsTableSeeder::class);
        $this->call(StadiaTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
    }
}
