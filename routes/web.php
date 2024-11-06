<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomeController::class,'index']);

Route::get('/article/{id}', [welcomeController::class,'post']);

Route::get('/Writers', [welcomeController::class,'Writers']);

Route::get('/AboutUs', [welcomeController::class,'AboutUs']);


Route::group(['prefix' => 'Category'], function(){

    Route::get('/{category}', [welcomeController::class,'postPerCategory']);

});

Route::get('/Writers/{name}', [welcomeController::class,'WritersPost']);

Route::get('/Popular', function () {
    return view('Popular');
});
