<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CierreSesionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'buscador'])->name('home.buscador');
/*Route::get('/home', [HomeController::class, 'resultado'])->name('home.resultado');*/

Route::prefix('/cliente')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('cliente');
});

Route::resource('/catalogo', CatalogoController::class);

Route::get('/registro', [RegistroController::class, 'show'])->name('registro');
Route::post('/registro', [RegistroController::class, 'register']);

Route::get('/acceso', [AccesoController::class, 'show'])->name('acceso');
Route::post('/acceso', [AccesoController::class, 'login']);

Route::get('/cierreSesion', [CierreSesionController::class, 'logout']);

Route::prefix('/administrador')->group(function () {
    Route::get('/no_convencional', [DocumentoController::class, 'create1'])->name('no_convencional.create');
    Route::get('/monografica', [DocumentoController::class, 'create2'])->name('monografica.create');
    Route::get('/coleccion_de_monografias', [DocumentoController::class, 'create3'])->name('coleccion_de_monografias.create');
    Route::get('/monografia', [DocumentoController::class, 'create4'])->name('monografia.create');
    Route::get('/periodica', [DocumentoController::class, 'create5'])->name('periodica.create');
    Route::get('/monografia_perteneciente_una_coleccion', [DocumentoController::class, 'create6'])->name('monografia_perteneciente_una_coleccion.create');
    Route::get('/test_disertacion_perteneciente_a_una_serie_monografica', [DocumentoController::class, 'create7'])->name('test_disertacion_perteneciente_a_una_serie_monografica.create');
    Route::get('/test_disertacion', [DocumentoController::class, 'create8'])->name('test_disertacion.create');
    Route::resource('/empleados', EmpleadoController::class);
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/perfil', PerfilController::class);
    Route::resource('/password', PasswordController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('administrador');
    Route::resource('/documentos', DocumentoController::class);
});