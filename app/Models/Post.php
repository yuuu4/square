<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'title',
    'body',
    'team_name',
    'category_id',
];

public function category()
{
    return $this->belongsTo(Category::class);
}
public function team()
{
    return $this->belongsTo(Team::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function replies()
    {
        return $this->hasMany(Reply::class);
    }

public function getPaginateByLimit(int $limit_count = 5)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}