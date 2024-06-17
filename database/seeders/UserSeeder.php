<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
             DB::table('users')->insert([
            'name' => 'seikabutu',
            'email' => 'yurika428521@gmail.com',
            'password' => Hash::make('volun-seika2'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
        
    }
    
    

