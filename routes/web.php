<?php

use Illuminate\Support\Facades\Route;
//use Spatie\Permission\Models\Role;
//$role = Role::create(['name' => 'admin']);
//$role = Role::create(['name' => 'cliente']);

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

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
    //Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('dashboard', App\Http\Controllers\Admin\dashboardController::class,["as"=>"admin"]);
    Route::resource('informacion', App\Http\Controllers\Admin\informacionController::class,["as"=>"admin"]);
    Route::resource('sucursales', App\Http\Controllers\Admin\SucursalController::class,["as"=>"admin"]);
    Route::resource('ingredientes', App\Http\Controllers\Admin\IngredienteController::class,["as"=>"admin"]);
    Route::resource('pizzasprestablecidas', App\Http\Controllers\Admin\pizzasPrestablecidasController::class,["as"=>"admin"]);
    Route::resource('combinacionPrestablecidas', App\Http\Controllers\Admin\combinacionPrestController::class,["as"=>"admin"]);
    
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:cliente']], function(){
    Route::resource('pedidos', App\Http\Controllers\Admin\pedidoController::class,["as"=>"admin"]);
    Route::resource('detallepedidos', App\Http\Controllers\Admin\detallePedidoController::class,["as"=>"admin"]);
    Route::resource('ingredientespersonalizados', App\Http\Controllers\Admin\ingredientesPersonalizadosController::class,["as"=>"admin"]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('sucursales', [App\Http\Controllers\Admin\SucursalController::class, 'publicView'])->name('sucursales.public');
Route::get('ingredientes', [App\Http\Controllers\Admin\IngredienteController::class, 'publicView'])->name('ingredientes.public');
Route::get('combinacionprestablecidas', [App\Http\Controllers\Admin\combinacionPrestController::class, 'publicView'])->name('combinacionprestablecidas.public');
