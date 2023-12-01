<?php

use Illuminate\Support\Facades\Route;
use Theme\Transp\Http\Controllers\TranspController;

Route::group(['controller' => TranspController::class, 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::group(['prefix' => 'ajax', 'as' => 'public.ajax.'], function () {
            Route::get('posts/{categoryId}', [TranspController::class, 'ajaxGetPostByCategory'])->name('posts');
        });
    });
});

Theme::routes();
