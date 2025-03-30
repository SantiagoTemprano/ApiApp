<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    /** @use HasFactory<\Database\Factories\PeticionFactory> */
    use HasFactory;
    protected $table = 'peticiones';
    protected $fillable = ['titulo','descripcion','categoria','autor','votos'];
}
