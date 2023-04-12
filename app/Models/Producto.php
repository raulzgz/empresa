<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //qué atributos permito con carga masiva de un formulario
    protected $fillable=['cod','nombre','nombre_corto','descripcion', 'PVP', 'familia'];
    use HasFactory;
    // nombre de tabla relacionada
    protected $table="producto";

    //Especifico la clave de la table
    protected $primaryKey="cod";
    protected $keyType ="string";
    public $incrementing=false;

    //si no tengo los campos create_at y update_at
    public $timestamps = false;

}
