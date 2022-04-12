<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanetaController;
use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    
});
*/


/*

Route::get('planeta', function(){
    
});

Route::get('planeta/create', function(){
    return 'Hola, aquí se pueden crear planetas ' ;
});

Route::get('planeta/{planeta}', function($planeta){
    return 'Hola, planeta ' . $planeta; /doraly
});

    Route::get('planeta', [PlanetaController::class, 'index']);
    Route::get('planeta/create', [PlanetaController::class, 'create']);
    Route::get('planeta/{planeta}/{galaxia}', [PlanetaController::class, 'show']);

*/


Route::get('/', HomeController::class );

Route::controller(PlanetaController::class)->group(function(){
    
    Route::get('planeta', 'index');
    Route::get('planeta/create',  'create');
    Route::get('planeta/{planeta}/{galaxia}',  'show');

}); 



