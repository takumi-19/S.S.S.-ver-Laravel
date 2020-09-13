<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(['match_id' => 10, 'team_id' => 1]);
        DB::table('rooms')->insert(['match_id' => 10, 'team_id' => 13]);
    }
}