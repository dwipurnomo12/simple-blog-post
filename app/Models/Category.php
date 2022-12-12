<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'slug', 'body'];
    // protected $guarded = ['id'];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
