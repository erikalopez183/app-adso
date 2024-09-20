<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable=['id_tipo_de_documento','numero','id_clasificacion_tributaria','nombre_razon_social','direccion','telefono','id_ciudad','correo_electronico','fecha_inicio_encargo'];
}
