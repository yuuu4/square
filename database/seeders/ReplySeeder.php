<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('replies')->insert([
                'body' => '素敵な投稿です！',
                'post_id'=>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
