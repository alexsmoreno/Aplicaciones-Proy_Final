<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursoProfesorController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TestController;
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

Auth::routes(['register' => false]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#administrador

Route::resource('alumno',AlumnoController::class);
Route::resource('profesor',ProfesorController::class);
Route::resource('curso',CursoController::class);
Route::resource('registro',RegistroController::class);

#profesor
Route::resource('cursoProfesor',CursoProfesorController::class);
Route::post('/cursoProfesor/{id}/editar',[CursoProfesorController::class,'editar'])->name('cursoProfesor.editar');

#ambos
Route::get('reporteFinal/{id}',[CursoProfesorController::class,'reporte'])->name('reporteFinal');


#Route::get('/test', [TestController::class, 'index']);
#npm run watch




