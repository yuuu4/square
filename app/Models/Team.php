<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Team extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'content',
    'place',
    'purpose',
   ];
   
   public function getBylimit(int $limit_count = 10)
   {
       return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
   }
   
public function posts()   
{
    return $this->hasMany(Post::class);  
}
public function user()
{
    return $this->belongsTo(User::class);
}


}
