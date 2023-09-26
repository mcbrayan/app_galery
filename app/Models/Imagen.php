<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    use HasFactory;
    protected $fillable = ['title', 'url', 'description', '_token', '_method'];
    public function etiqueta()
    {
        return $this->belongsToMany(Etiqueta::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
