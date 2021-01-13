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


Route::get('/', function () {
    return view('welcome');
});



//Route::get('/horario',function(){
//   return view('/docentes.perfil');
//})->name('horario');

Route::prefix('docente')->name('docente.')->group(function () {

    Route::get('/perfil',function(){
        return view('/docentes.perfil');
    })->name('perfil');

    Route::get('/horario',function(){
        return view('/docentes.horario');
    })->name('horario');

    Route::get('/cursos',function(){
        return view('/docentes.cursos');
    })->name('cursos');    
});