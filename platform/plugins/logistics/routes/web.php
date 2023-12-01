<?php

use Botble\Base\Facades\BaseHelper;
use Botble\Logistics\Http\Controllers\CustomFieldController;
use Botble\Logistics\Http\Controllers\PackageController;
use Botble\Logistics\Http\Controllers\PublicController;
use Botble\Logistics\Http\Controllers\QuotationRequestController;
use Botble\Logistics\Http\Controllers\ServiceCategoryController;
use Botble\Logistics\Http\Controllers\ServiceController;
use Botble\Logistics\Models\Package;
use Botble\Logistics\Models\Service;
use Botble\Logistics\Models\ServiceCategory;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'core'])->group(function () {
    Route::middleware('auth')->prefix(BaseHelper::getAdminPrefix() . '/logistics')->name('logistics.')->group(function () {
        Route::prefix('custom-fields')->name('custom-fields.')->group(function () {
            Route::resource('', CustomFieldController::class)->parameters(['' => 'custom-field']);
        });

        Route::prefix('service-categories')->name('service-categories.')->group(function () {
            Route::resource('', ServiceCategoryController::class)->parameters(['' => 'service-category']);
        });

        Route::prefix('services')->name('services.')->group(function () {
            Route::resource('', ServiceController::class)->parameters(['' => 'service']);
        });

        Route::prefix('packages')->name('packages.')->group(function () {
            Route::resource('', PackageController::class)->parameters(['' => 'package']);
        });

        Route::prefix('quotation-requests')->name('quotation-requests.')->group(function () {
            Route::resource('', QuotationRequestController::class)->parameters(['' => 'quotation-request'])
                ->only(['index', 'edit', 'update', 'destroy']);
        });
    });

    Route::prefix('logistics')->name('logistics.')->group(function () {
        Route::post('request-quote', [PublicController::class, 'storeQuote'])->name('request-quote');
    });

    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get(
            sprintf('%s/{slug}', SlugHelper::getPrefix(Service::class, 'services')),
            [PublicController::class, 'service']
        )
            ->name('public.service');

        Route::get(
            sprintf('%s/{slug}', SlugHelper::getPrefix(ServiceCategory::class, 'service-categories')),
            [PublicController::class, 'serviceCategory']
        )
            ->name('public.service-category');

        Route::get(
            sprintf('%s/{slug}', SlugHelper::getPrefix(Package::class, 'packages')),
            [PublicController::class, 'package']
        )
            ->name('public.package');
    });
});
