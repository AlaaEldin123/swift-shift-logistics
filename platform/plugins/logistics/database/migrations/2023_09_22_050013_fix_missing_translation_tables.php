<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up(): void
    {
        Schema::create('lg_service_categories_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->foreignId('lg_service_categories_id');
            $table->string('name', 255)->nullable();
            $table->string('description', 400)->nullable();

            $table->primary(['lang_code', 'lg_service_categories_id'], 'lg_service_categories_translations_primary');
        });

        Schema::create('lg_services_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->foreignId('lg_services_id');
            $table->string('name', 255)->nullable();
            $table->string('description', 400)->nullable();
            $table->text('content')->nullable();

            $table->primary(['lang_code', 'lg_services_id'], 'lg_services_translations_primary');
        });

        Schema::create('lg_packages_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->foreignId('lg_packages_id');
            $table->string('name', 255)->nullable();
            $table->string('description', 400)->nullable();
            $table->text('content')->nullable();
            $table->string('price')->nullable();
            $table->string('annual_price')->nullable();
            $table->text('features')->nullable();

            $table->primary(['lang_code', 'lg_packages_id'], 'lg_packages_translations_primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lg_service_categories_translations');
        Schema::dropIfExists('lg_services_translations');
        Schema::dropIfExists('lg_packages_translations');
    }
};
