<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id',
        'stock',
        'precio',
        'foto',
        'usuario_id',
        
    ];

    public function User(){
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }

    public function categorias(){
        return $this->hasOne('App\Models\categorias', 'id', 'categoria_id');
    }
}
