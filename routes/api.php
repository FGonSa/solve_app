<?php

use App\Http\Controllers\Api\AgenciaController;
use App\Http\Controllers\Api\CartaHasAgenciaController;
use App\Http\Controllers\Api\CartaTrucadaController;
use App\Http\Controllers\Api\ComarcaController;
use App\Http\Controllers\Api\DatosPersonalesController;
use App\Http\Controllers\Api\EstadoAgenciaController;
use App\Http\Controllers\Api\EstatExpedientsController;
use App\Http\Controllers\Api\Expediente;
use App\Http\Controllers\Api\IncidentsController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\PerfilController;
use App\Http\Controllers\Api\ProvinciaController;
use App\Http\Controllers\Api\TipoLocalizacionController;
use App\Http\Controllers\Api\TipusIncidentsControllerApi;
use App\Http\Controllers\Api\UsuarisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::apiResource('tipus_incidents', TipusIncidentsControllerApi::class);
Route::apiResource('incidents', IncidentsController::class);
Route::apiResource('provincies', ProvinciaController::class);
Route::apiResource('comarques', ComarcaController::class);
Route::apiResource('municipis', MunicipioController::class);
Route::apiResource('agencies', AgenciaController::class);
Route::apiResource('dades_personals', DatosPersonalesController::class);
Route::apiResource('estats_agencies', EstadoAgenciaController::class);
Route::apiResource('usuaris', UsuarisController::class);
Route::apiResource('perfils', PerfilController::class);
Route::apiResource('tipus_localitzacions', TipoLocalizacionController::class);
Route::apiResource('expedients', Expediente::class);
Route::apiResource('estats_expedients', EstatExpedientsController::class);
Route::apiResource('cartes_trucades', CartaTrucadaController::class);
Route::apiResource('cartes_trucades_has_agencies', CartaHasAgenciaController::class);
