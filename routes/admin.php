<?php

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/', function(){
        return view('layouts.backend');
    });

    Route::resource('/category',  \App\Http\Controllers\CategoryController::class, ['names' => 'category']);
    Route::resource('/menu',  \App\Http\Controllers\MenuController::class, ['names' => 'menu']);
});

