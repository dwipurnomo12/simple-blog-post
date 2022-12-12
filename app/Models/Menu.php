<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link', 'user_id', 'location'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
