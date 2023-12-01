<?php

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Logistics\Models\ServiceCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('lg_service_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ServiceCategory::class, 'parent_id')->nullable()->index();
            $table->string('name');
            $table->string('description', 400)->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('order')->default(0);
            $table->string('status')->default(BaseStatusEnum::PUBLISHED);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lg_service_categories');
    }
};
