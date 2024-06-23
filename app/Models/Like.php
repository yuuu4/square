<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




class Like extends Model
{
    
    
    
    protected $fillable = [
    'user_id',
    'post_id'
];

    
    public function user()
    {   //usersテーブルとのリレーションを定義するuserメソッド
        return $this->belongsTo(User::class);
    }

    public function post()
    {   
        return $this->belongsTo(Post::class);
    }
}
