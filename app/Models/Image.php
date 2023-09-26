<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Habilitar asignacion masiva para el campo url
    protected $fillable=['url'];

    // Relacion polimorfica
    public function imageable(){
        return $this->morphTo();
    }
    
}
