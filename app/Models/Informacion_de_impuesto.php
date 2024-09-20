<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion_de_impuesto extends Model
{
    use HasFactory;

    protected $fillable=['id_empresa','id_tipo_declaracion','id_periodicidad_declaracion','fecha_vencimiento_impuestos','fecha_entrega_revision','id_tercero'];
}
