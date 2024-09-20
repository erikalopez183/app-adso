<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacion_de_impuesto extends Model
{
    use HasFactory;

    protected $fillable=['id_empresa','id_revision_impuestos','fecha_presentacion_impuesto','observaciones'];
}
