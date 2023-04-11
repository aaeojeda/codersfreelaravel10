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
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
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