<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(['id' => 1, 'team_name' => '北海道コンサドーレ札幌','team_logo' => 'j1_team_emblem/img_club_sapporo.png','team_color' => 'sapporo_color']);
        DB::table('teams')->insert(['id' => 2, 'team_name' => 'ベガルタ仙台','team_logo' => 'j1_team_emblem/img_club_sendai.png','team_color' => 'sendai_color']);
        DB::table('teams')->insert(['id' => 3, 'team_name' => '鹿島アントラーズ','team_logo' => 'j1_team_emblem/img_club_kashima.png','team_color' => 'kashima_color']);
        DB::table('teams')->insert(['id' => 4, 'team_name' => '浦和レッズ','team_logo' => 'j1_team_emblem/img_club_urawa.png','team_color' => 'urawa_color']);
        DB::table('teams')->insert(['id' => 5, 'team_name' => '柏レイソル','team_logo' => 'j1_team_emblem/img_club_kashiwa.png','team_color' => 'kashiwa_color']);
        DB::table('teams')->insert(['id' => 6, 'team_name' => 'FC東京','team_logo' => 'j1_team_emblem/img_club_ftokyo.png','team_color' => 'ftokyo_color']);
        DB::table('teams')->insert(['id' => 7, 'team_name' => '川崎フロンターレ','team_logo' => 'j1_team_emblem/img_club_kawasakif.png','team_color' => 'kawasaki_color']);
        DB::table('teams')->insert(['id' => 8, 'team_name' => '横浜F・マリノス','team_logo' => 'j1_team_emblem/img_club_yokohamafm.png','team_color' => 'yokohamafm_color']);
        DB::table('teams')->insert(['id' => 9, 'team_name' => '横浜FC','team_logo' => 'j1_team_emblem/img_club_yokohamafc.png','team_color' => 'yokohamafc_color']);
        DB::table('teams')->insert(['id' => 10, 'team_name' => '湘南ベルマーレ','team_logo' => 'j1_team_emblem/img_club_shonan.png','team_color' => 'shonan_color']);
        DB::table('teams')->insert(['id' => 11, 'team_name' => '清水エスパルス','team_logo' => 'j1_team_emblem/img_club_shimizu.png','team_color' => 'shimizu_color']);
        DB::table('teams')->insert(['id' => 12, 'team_name' => '名古屋グランパス','team_logo' => 'j1_team_emblem/img_club_nagoya.png','team_color' => 'nagoya_color']);
        DB::table('teams')->insert(['id' => 13, 'team_name' => 'ガンバ大阪','team_logo' => 'j1_team_emblem/img_club_gosaka.png','team_color' => 'gosaka_color']);
        DB::table('teams')->insert(['id' => 14, 'team_name' => 'セレッソ大阪','team_logo' => 'j1_team_emblem/img_club_cosaka.png','team_color' => 'cosaka_color']);
        DB::table('teams')->insert(['id' => 15, 'team_name' => 'ヴィッセル神戸','team_logo' => 'j1_team_emblem/img_club_kobe.png','team_color' => 'kobe_color']);
        DB::table('teams')->insert(['id' => 16, 'team_name' => 'サンフレッチェ広島','team_logo' => 'j1_team_emblem/img_club_hiroshima.png','team_color' => 'hiroshima_color']);
        DB::table('teams')->insert(['id' => 17, 'team_name' => 'サガン鳥栖','team_logo' => 'j1_team_emblem/img_club_tosu.png','team_color' => 'tosu_color']);
        DB::table('teams')->insert(['id' => 18, 'team_name' => '大分トリニータ','team_logo' => 'j1_team_emblem/img_club_oita.png','team_color' => 'oita_color']);
    }
}
