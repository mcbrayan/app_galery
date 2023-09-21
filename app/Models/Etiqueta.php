<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    public function imagenes()
    {
        return $this->belongsToMany(Imagen::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
