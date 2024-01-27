<?php

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/', function(){
        return view('layouts.backend');
    });
});

