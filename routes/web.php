<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CreditoController;

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




Route::resource('producto',ProductoController::class)->middleware('auth');
Route::resource('proveedor',ProveedorController::class);
Route::resource('credito',CreditoController::class);

Auth::routes(['reset'=>false]);




Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ProductoController::class, 'index'])->name('home');
});

