<?php

use Botble\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Botble\Team\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'teams', 'as' => 'team.'], function () {
            Route::resource('', 'TeamController')->parameters(['' => 'team']);
        });
    });
});
