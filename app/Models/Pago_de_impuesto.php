<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago_de_impuesto extends Model
{
    use HasFactory;

    protected $fillable=['id_empresa','id_revision_impuestos','fecha_pago_impuesto','observaciones'];
}
