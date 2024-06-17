<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        DB::table('posts')->insert([
                'title' => '初めて投稿します',
                'body' => '〇月✕日にミニテニス大会が開催されます！
年齢60歳以上ならだれでも歓迎！
興味のある方はぜひご連絡ください！
❁広報を手伝ってくれる方も募集中です❁',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'user_id' => 1, 
                'category_id' => 2, 
                'team_id' => 1, 
                'team_name'=> 'テニス応援団体',
                'likes_count' => 0,
         ]);
         
         DB::table('posts')->insert([
                'title' => 'ごみ拾いの募集',
                'body' => ' ○○大学付近を綺麗にします！
手伝ってくれた方にはジュースをプレゼント！
参加してくれる方は教えてください！今月の10日と20日に行います！
勿論どちらかだけ、短時間の参加もオッケーです◎ ' ,                
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'user_id' => 1, 
                'category_id' => 5, 
                'team_id' => 1, 
                'team_name'=> '環境保護団体A',
                'likes_count' =>0
         ]);
}
}