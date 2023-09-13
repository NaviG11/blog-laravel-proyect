<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // user 1 n posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
