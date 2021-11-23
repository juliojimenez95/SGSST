<?php

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
    return view('welcome');
});
Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [App\Http\Controllers\EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados/store', [App\Http\Controllers\EmpleadoController::class, 'store'])->name('empleados.store');
Route::get('/empleados/show/{id}', [App\Http\Controllers\EmpleadoController::class, 'show'])->name('empleados.show');
Route::get('/empleados/edit/{id}', [App\Http\Controllers\EmpleadoController::class, 'edit'])->name('empleados.edit');
Route::put('/empleados/update/{id}', [App\Http\Controllers\EmpleadoController::class, 'update'])->name('empleados.update');
Route::delete('/empleados/delete/{id}', [App\Http\Controllers\EmpleadoController::class, 'delete'])->name('empleados.delete');
