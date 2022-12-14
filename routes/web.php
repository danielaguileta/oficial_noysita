<?php
//poner eso para que reconozca la ruta de abajo

use App\Http\Controllers\caicontroller;
use App\Http\Controllers\clientecontroller;
use App\Http\Controllers\compracontroller;
use App\Http\Controllers\empleadoscontroller;
use App\Http\Controllers\facturacontroller;
use App\Http\Controllers\inventariocontroller;
use App\Http\Controllers\logscontroller;
use App\Http\Controllers\platilloscontroller;
use App\Http\Controllers\proveedorcontroller;
use App\Http\Controllers\perfilcontroller;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dash', function () {
    return view('dash.index');
})->middleware(['auth'])->name('dash');

Route::get('/dash/el', function () {
    return view('dash.welcome');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {
    Route::resource('cliente',clientecontroller::class)->names('clientes');
    Route::resource('proveedor',proveedorcontroller::class)->names('proveedor');
    Route::resource('empleados',empleadoscontroller::class)->names('empleados');
    Route::resource('compra',compracontroller::class)->names('compra');
    Route::resource('platillos',platilloscontroller::class)->names('platillos');
    Route::resource('inventario',inventariocontroller::class)->names('inventario');
    Route::resource('cai',caicontroller::class)->names('cai');
    Route::resource('factura',facturacontroller::class)->names('factura');
    Route::resource('perfil',perfilcontroller::class)->names('perfil');
    Route::resource('logs',logscontroller::class)->names('logs');

});
