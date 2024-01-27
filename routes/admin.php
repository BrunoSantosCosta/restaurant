<?php

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/', function(){
        echo 'this is admin section';
    });
});

