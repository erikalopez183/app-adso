<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignacionEmpresaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ClasificacionTributariaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FirmaImpuestoController;
use App\Http\Controllers\InformacionDeImpuestoController;
use App\Http\Controllers\PagoDeImpuestoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PeriodicidadDeclaracionController;
use App\Http\Controllers\PresentacionDeImpuestoController;
use App\Http\Controllers\RevisionImpuestoController;
use App\Http\Controllers\TerceroController;
use App\Http\Controllers\TipoDeDeclaracionController;
use App\Http\Controllers\TipoDeDocumentoController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pepito', function () {
    return view('otra');
});


