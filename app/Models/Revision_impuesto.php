<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision_impuesto extends Model
{
    use HasFactory;

    protected $fillable=['id_empresa','id_tipo_de_declaracion','fecha_recibido_revision','id_tercero','valor_impuesto','valor_saldo_favor','valor_sancion','observaciones'];
}
