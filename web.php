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

//UNIDAD 35 EJERCICIO DE RUTAS//

// Route::get('fd0a',function(){
//     //codigo a ejecutar cuando se produzca esa ruta y el verbo
//     return 'get';
// });

// Route::post('/probando/ruta',function(){
//     //codigo a ejecutar cuando se produzca esa ruta y el verbo
//     return 'post';
// });

// Route::put('/probando/ruta',function(){
//     //codigo a ejecutar cuando se produzca esa ruta y el verbo
//     return 'put';
// });

// Route::delete('/probando/ruta',function(){
//     //codigo a ejecutar cuando se produzca esa ruta y el verbo
//     return 'delete';
// });

// Route::match(['get', 'post', 'put'],'/testing', function(){
//     //codigo a ejecutar cuando se produzca GET, POST o PUT esa ruta
// });

// Route::any('/cualquiercosa', function(){
//     //codigo a ejecutar cuando se produzca cualquier accion sobre esa ruta
// });


// UNIDAD 38 -- EJERCICIO 1

Route::get('/test',['middleware' => 'Lunes', function(){
    return 'Probando ruta con middleware';
}]);

//UNIDAD 38 -- EJERCICIO 3 Y 4

Route::group(['middleware' => 'Lunes'], function(){
    Route::get('/test/lunes', function(){
        //código a ejecutar cuando se produzca esa ruta y el verbo 
        return 'get: Probando ruta con middleware';
    });

    Route::post('/test/lunes', function(){
        //código a ejecutar cuando se produzca esa ruta y el verbo POST
        return 'post: Probando ruta con middleware';
    });
    Route::put('/test/lunes', function(){
        //código a ejecutar cuando se produzca esa ruta y el verbo PUT
        return 'put: Probando ruta con middleware';
    });

    Route::delete('/test/lunes', function(){
        //código a ejecutar cuando se produzca esa ruta y el verbo DELETE
        return 'delte: Probando ruta con middleware';
    });

});
