<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    use HasFactory;

    protected $fillable=['id_tipo_de_documento','numero','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','correo_electronico','direccion','telefono','id_cargo'];
}
