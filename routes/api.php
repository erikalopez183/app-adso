<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutController;
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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/asignacionempresa/datos', [AsignacionEmpresaController::class, 'getData']);
Route::post('/asignacionempresa/save', [AsignacionEmpresaController::class, 'save']);
Route::get('/asignacionempresa/datosById', [AsignacionempresaController::class, 'getDataById']);
Route::put('/asignacionempresa/update', [AsignacionEmpresaController::class, 'update']);
Route::delete('/asignacionempresa/delete', [AsignacionEmpresaController::class, 'delete']);

Route::get('/cargo/datos', [CargoController::class, 'getData']);
Route::get('/cargo/datosById', [CargoController::class, 'getDataById']);
Route::post('/cargo/save', [CargoController::class, 'save']);
Route::put('/cargo/update', [CargoController::class, 'update']);
Route::delete('/cargo/delete', [CargoController::class, 'delete']);

Route::get('/ciudad/datos', [CiudadController::class, 'getData']);
Route::get('/ciudad/datosById', [CiudadController::class, 'getDataById']);
Route::post('/ciudad/save', [CiudadController::class, 'save']);
Route::put('/ciudad/update', [CiudadController::class, 'update']);
Route::delete('/ciudad/delete', [CiudadController::class, 'delete']);

Route::get('/clasificaciontributaria/datos', [ClasificacionTributariaController::class, 'getData']);
Route::get('/clasificaciontributaria/datosById', [clasificaciontributariaController::class, 'getDataById']);
Route::post('/clasificaciontributaria/save', [ClasificacionTributariaController::class, 'save']);
Route::put('/clasificaciontributaria/update', [ClasificacionTributariaController::class, 'update']);
Route::delete('/clasificaciontributaria/delete', [ClasificacionTributariaController::class, 'delete']);

Route::get('/Departamento/datos', [DepartamentoController::class, 'getData']);
Route::get('/Departamento/datosById', [DepartamentoController::class, 'getDataById']);
Route::post('/Departamento/save', [DepartamentoController::class, 'save']);
Route::put('/Departamento/update', [DepartamentoController::class, 'update']);
Route::delete('/Departamento/delete', [DepartamentoController::class, 'delete']);

Route::get('/Empresa/datos', [EmpresaController::class, 'getData']);
Route::get('/Empresa/datosById', [EmpresaController::class, 'getDataById']);
Route::post('/Empresa/save', [EmpresaController::class, 'save']);
Route::put('/Empresa/update', [EmpresaController::class, 'update']);
Route::delete('/Empresa/delete', [EmpresaController::class, 'delete']);

Route::get('/FirmaImpuesto/datos', [FirmaImpuestoController::class, 'getData']);
Route::get('/FirmaImpuesto/datosById', [FirmaImpuestoController::class, 'getDataById']);
Route::post('/FirmaImpuesto/save', [FirmaImpuestoController::class, 'save']);
Route::put('/FirmaImpuesto/update', [FirmaImpuestoController::class, 'update']);
Route::delete('/FirmaImpuesto/delete', [FirmaImpuestoController::class, 'delete']);

Route::get('/InformacionDeImpuesto/datos', [InformacionDeImpuestoController::class, 'getData']);
Route::post('/InformacionDeImpuesto/save', [InformacionDeImpuestoController::class, 'save']);
Route::get('/InformacionDeImpuesto/datosById', [InformacionDeImpuestoController::class, 'getDataById']);
Route::put('/InformacionDeImpuesto/update', [InformacionDeImpuestoController::class, 'update']);
Route::delete('/InformacionDeImpuesto/delete', [InformacionDeImpuestoController::class, 'delete']);

Route::get('/PagoDeImpuesto/datos', [PagoDeImpuestoController::class, 'getData']);
Route::post('/PagoDeImpuesto/save', [PagoDeImpuestoController::class, 'save']);
Route::get('/PagoDeImpuesto/datosById', [PagoDeImpuestoController::class, 'getDataById']);
Route::put('/PagoDeImpuesto/update', [PagoDeImpuestoController::class, 'update']);
Route::delete('/PagoDeImpuesto/delete', [PagoDeImpuestoController::class, 'delete']);

Route::get('/Pais/datos', [PaisController::class, 'getData']);
Route::get('/Pais/datosById', [PaisController::class, 'getDataById']);
Route::post('/Pais/save', [PaisController::class, 'save']);
Route::put('/Pais/update', [PaisController::class, 'update']);
Route::delete('/Pais/delete', [PaisController::class, 'delete']);

Route::get('/PeriodicidadDeclaracion/datos', [PeriodicidadDeclaracionController::class, 'getData']);
Route::get('/PeriodicidadDeclaracion/datosById', [PeriodicidadDeclaracionController::class, 'getDataById']);
Route::post('/PeriodicidadDeclaracion/save', [PeriodicidadDeclaracionController::class, 'save']);
Route::put('/PeriodicidadDeclaracion/update', [PeriodicidadDeclaracionController::class, 'update']);
Route::delete('/PeriodicidadDeclaracion/delete', [PeriodicidadDeclaracionController::class, 'delete']);

Route::get('/PresentacionDeImpuesto/datos', [PresentacionDeImpuestoController::class, 'getData']);
Route::get('/PresentacionDeImpuesto/datosById', [PresentacionDeImpuestoController::class, 'getDataById']);
Route::post('/PresentacionDeImpuesto/save', [PresentacionDeImpuestoController::class, 'save']);
Route::put('/PresentacionDeImpuesto/update', [PresentacionDeImpuestoController::class, 'update']);
Route::delete('/PresentacionDeImpuesto/delete', [PresentacionDeImpuestoController::class, 'delete']);

Route::get('/RevisionImpuesto/datos', [RevisionImpuestoController::class, 'getData']);
Route::get('/RevisionImpuesto/datosById', [RevisionImpuestoController::class, 'getDataById']);
Route::post('/RevisionImpuesto/save', [RevisionImpuestoController::class, 'save']);
Route::put('/RevisionImpuesto/update', [RevisionImpuestoController::class, 'update']);
Route::delete('/RevisionImpuesto/delete', [RevisionImpuestoController::class, 'delete']);

Route::get('/Tercero/datos', [TerceroController::class, 'getData']);
Route::get('/Tercero/datosById', [TerceroController::class, 'getDataById']);
Route::post('/Tercero/save', [TerceroController::class, 'save']);
Route::put('/Tercero/update', [TerceroController::class, 'update']);
Route::delete('/Tercero/delete', [TerceroController::class, 'delete']);

Route::get('/TipoDeDeclaracion/datos', [TipoDeDeclaracionController::class, 'getData']);
Route::get('/TipoDeDeclaracion/datosById', [TipoDeDeclaracionController::class, 'getDataById']);
Route::post('/TipoDeDeclaracion/save', [TipoDeDeclaracionController::class, 'save']);
Route::put('/TipoDeDeclaracion/update', [TipoDeDeclaracionController::class, 'update']);
Route::delete('/TipoDeDeclaracion/delete', [TipoDeDeclaracionController::class, 'delete']);

Route::get('/TipoDeDocumento/datos', [TipoDeDocumentoController::class, 'getData']);
Route::get('/TipoDeDocumento/datosById', [TipoDeDocumentoController::class, 'getDataById']);
Route::post('/TipoDeDocumento/save', [TipoDeDocumentoController::class, 'save']);
Route::put('/TipoDeDocumento/update', [TipoDeDocumentoController::class, 'update']);
Route::delete('/TipoDeDocumento/delete', [TipoDeDocumentoController::class, 'delete']);

Route::get('/Usuario/datos', [UsuarioController::class, 'getData']);
Route::get('/Usuario/datosById', [UsuarioController::class, 'getDataById']);
Route::post('/Usuario/save', [UsuarioController::class, 'save']);
Route::put('/Usuario/update', [UsuarioController::class, 'update']);
Route::delete('/Usuario/delete', [UsuarioController::class, 'delete']);

