<?php

use Illuminate\Database\Seeder;

class StadiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadia')->insert(['id' => 1, 'stadium_name' => '札幌ドーム', 'city' => '北海道札幌市', 'team_id' => 1]);
        DB::table('stadia')->insert(['id' => 2, 'stadium_name' => 'ユアテックスタジアム仙台', 'city' => '宮城県仙台市', 'team_id' => 2]);
        DB::table('stadia')->insert(['id' => 3, 'stadium_name' => '県立カシマサッカースタジアム', 'city' => '茨城鹿嶋市', 'team_id' => 3]);
        DB::table('stadia')->insert(['id' => 4, 'stadium_name' => '埼玉スタジアム2002', 'city' => '埼玉県さいたま市', 'team_id' => 4]);
        DB::table('stadia')->insert(['id' => 5, 'stadium_name' => '三協フロンテア柏スタジアム', 'city' => '千葉県柏市', 'team_id' => 5]);
        DB::table('stadia')->insert(['id' => 6, 'stadium_name' => '味の素スタジアム', 'city' => '東京都', 'team_id' => 6]);
        DB::table('stadia')->insert(['id' => 7, 'stadium_name' => '等々力陸上競技場', 'city' => '神奈川県川崎市', 'team_id' => 7]);
        DB::table('stadia')->insert(['id' => 8, 'stadium_name' => '日産スタジアム', 'city' => '神奈川県横浜市', 'team_id' => 8]);
        DB::table('stadia')->insert(['id' => 9, 'stadium_name' => 'ニッパツ三ツ沢球技場', 'city' => '神奈川県横浜市', 'team_id' => 9]);
        DB::table('stadia')->insert(['id' => 10, 'stadium_name' => 'Shonan BMW スタジアム平塚', 'city' => '神奈川県平塚市', 'team_id' => 10]);
        DB::table('stadia')->insert(['id' => 11, 'stadium_name' => 'IAIスタジアム日本平', 'city' => '静岡県静岡市', 'team_id' => 11]);
        DB::table('stadia')->insert(['id' => 12, 'stadium_name' => '豊田スタジアム', 'city' => '愛知県名古屋市', 'team_id' => 12]);
        DB::table('stadia')->insert(['id' => 13, 'stadium_name' => 'パナソニックスタジアム吹田', 'city' => '大阪府吹田市', 'team_id' => 13]);
        DB::table('stadia')->insert(['id' => 14, 'stadium_name' => 'ヤンマースタジアム長居', 'city' => '大阪府大阪市', 'team_id' => 14]);
        DB::table('stadia')->insert(['id' => 15, 'stadium_name' => 'ノエビアスタジアム神戸', 'city' => '兵庫県神戸市', 'team_id' => 15]);
        DB::table('stadia')->insert(['id' => 16, 'stadium_name' => 'エディオンスタジアム広島', 'city' => '広島県広島市', 'team_id' => 16]);
        DB::table('stadia')->insert(['id' => 17, 'stadium_name' => '駅前不動産スタジアム', 'city' => '佐賀県鳥栖市', 'team_id' => 17]);
        DB::table('stadia')->insert(['id' => 18, 'stadium_name' => '昭和電工ドーム大分', 'city' => '大分県大分市', 'team_id' => 18]);
    }
}
