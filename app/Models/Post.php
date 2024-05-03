<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

public function category()
{
    return $this->belongsTo(Category::class);
}
public function team()
{
    return $this->belongsTo(team::class);
}
public function user()
{
    return $this->belongsTo(user::class);
}
public function getPaginateByLimit(int $limit_count = 5)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}