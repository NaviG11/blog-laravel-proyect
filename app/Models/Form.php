<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','ci','email','telefono','denunciado','direccion','unipolicial','cargo','ciudad','departamento','detalle','fecha','archivo'];
    /*
    public function getRouteKeyName()
    {
        return "slug";
    }

    // user 1 n posts
    public function posts(){
        return $this->hasMany(Post::class);
    }*/
    
   
}