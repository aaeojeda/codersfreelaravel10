<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{id}', 'show')->name('cursos.show');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
});


/* SE COMENTÓ - SE PASÓ A UN GRUPO DE RUTAS
Route::get('/cursos', [CursoController::class, 'index']); //válido desde laravel8
Route::get('/cursos/create',[CursoController::class, 'create']);
Route::get('/cursos/{curso}', [CursoController::class, 'show']);
*/

/* SE COMENTÓ - ES EJEMPLO DE COMO RECIBIR O NO UN PARAMETRO
Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria){
        return "Bienvenido al curso ".$curso.", de la categoría ".$categoria;
    }    
    else {
        return "Bienvenido al curso: ".$curso;
    }
});
*/