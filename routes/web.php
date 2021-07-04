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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('fd0a',function(){
    //codigo a ejecutar cuando se produzca esa ruta y el verbo
    return 'get';
});

Route::post('/probando/ruta',function(){
    //codigo a ejecutar cuando se produzca esa ruta y el verbo
    return 'post';
});

Route::put('/probando/ruta',function(){
    //codigo a ejecutar cuando se produzca esa ruta y el verbo
    return 'put';
});

Route::delete('/probando/ruta',function(){
    //codigo a ejecutar cuando se produzca esa ruta y el verbo
    return 'delete';
});

Route::match(['get', 'post', 'put'],'/testing', function(){
    //codigo a ejecutar cuando se produzca GET, POST o PUT esa ruta
});

Route::any('/cualquiercosa', function(){
    //codigo a ejecutar cuando se produzca cualquier accion sobre esa ruta
});


// EJERCICIO DEL JUEVES

Route::get('/test',['middleware' => 'Lunes', function(){
    return 'Probando ruta con middleware';
}]);


