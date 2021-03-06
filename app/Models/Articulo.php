<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;



    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
    ];




    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

}
