<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion_empresa extends Model
{
    use HasFactory;

    protected $fillable=['id_tercero','id_empresa'];
}
