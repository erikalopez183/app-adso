<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma_impuesto extends Model
{
    use HasFactory;

    protected $fillable=['id_empresa','id_revision_impuestos','id_tercero','fecha_firma_impuesto','observaciones'];
}
