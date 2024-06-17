<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use DateTime;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        DB::table('teams')->insert([
                'name' => 'テニス応援団体',
                'content' => '| 月に2回テニスの大会を開催しています！
皆で集まってテレビで観戦することも、、、
誰でも気軽に参加して欲しいです
大会は東京近郊で会場を借りています',
                'purpose' =>'テニスの普及と、誰でも気軽にスポーツを楽しむ場所を提供したいという願いからこの活動を始めました。', 
                'place' => '事務所は新宿の〇〇ビルの6階にあります', 
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'user_id' => 1, 
         ]);
         
         
}
}