<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentrosLocales extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    // user 1 n posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
