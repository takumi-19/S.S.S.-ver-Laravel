<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-21 19:00:00', 'stadium_id' => 10, 'home_team_id' => 10, 'away_team_id' => 4]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-22 14:00:00', 'stadium_id' => 2, 'home_team_id' => 2, 'away_team_id' => 12]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-22 15:00:00', 'stadium_id' => 5, 'home_team_id' => 5, 'away_team_id' => 1]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-22 15:00:00', 'stadium_id' => 7, 'home_team_id' => 7, 'away_team_id' => 17]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-22 15:00:00', 'stadium_id' => 14, 'home_team_id' => 14, 'away_team_id' => 18]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-23 13:00:00', 'stadium_id' => 11, 'home_team_id' => 11, 'away_team_id' => 6]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-23 14:00:00', 'stadium_id' => 8, 'home_team_id' => 8, 'away_team_id' => 13]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-23 14:00:00', 'stadium_id' => 16, 'home_team_id' => 16, 'away_team_id' => 3]);
        DB::table('matches')->insert(['week' => 1, 'kick_off' => '2020-02-23 16:00:00', 'stadium_id' => 15, 'home_team_id' => 15, 'away_team_id' => 9]);

        DB::table('matches')->insert(['week' => 14, 'kick_off' => '2020-09-05 14:00:00', 'stadium_id' => 1, 'home_team_id' => 1, 'away_team_id' => 16]);
    }
}
