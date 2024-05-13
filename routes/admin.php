<?php


Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('admin.home');
    // Category routes
    // Route::resource('/category', \App\Http\Controllers\CategoryController::class, ['names' => 'category']);
    // Category routes
    Route::resource('/productCategory', \App\Http\Controllers\ProductCategoryController::class, ['names' => 'productCategory']);
    Route::resource('/blogCategory', \App\Http\Controllers\BlogCategoryController::class, ['names' => 'blogCategory']);

    // Products routes
    Route::resource('/product', \App\Http\Controllers\ProductController::class, ['names' => 'product']);

    // Accompaniment routes
    Route::resource('/productAddon', \App\Http\Controllers\ProductAddonController::class, ['names' => 'productAddon']);
    // Service routes
    Route::resource('/service', \App\Http\Controllers\ServiceController::class, ['names' => 'service']);
    // Staff routes
    Route::resource('/staff', \App\Http\Controllers\StaffController::class, ['names' => 'staff']);
    // Blog routes
    Route::resource('/blog', \App\Http\Controllers\BlogController::class, ['names' => 'blog']);
    // Gallery routes
    Route::resource('/gallery', \App\Http\Controllers\GalleryController::class, ['names' => 'gallery']);
    // Slider routes
    Route::resource('/slider', \App\Http\Controllers\SliderController::class, ['names' => 'slider']);
    // Order route
    Route::get('/order', [App\Http\Controllers\OrderShowController::class, 'index'])->name('admin.order');
    Route::get('/order/{type}/{order}', [App\Http\Controllers\OrderShowController::class, 'confirmation'])->name('admin.order.confirmation');
    Route::delete('/order/{order}', [App\Http\Controllers\OrderShowController::class, 'delete'])->name('admin.order.delete');
    //General routes
    Route::get('/general', [App\Http\Controllers\GeneralController::class, 'index'])->name('admin.general');
    Route::put('/general/{type}', [App\Http\Controllers\GeneralController::class, 'store'])->name('admin.general.store');
    //Schedules routes
    // Route::get('/schedules', [App\Http\Controllers\SchedulesController::class, 'index'])->name('admin.schedules');
    Route::resource('/schedules', \App\Http\Controllers\SchedulesController::class, ['names' => 'schedules']);

});

