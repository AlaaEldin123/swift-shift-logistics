<?php

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Logistics\Models\ServiceCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('lg_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ServiceCategory::class, 'category_id')->index();
            $table->morphs('author');
            $table->string('title')->unique();
            $table->string('description', 400)->nullable();
            $table->longText('content')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('thumbnail')->nullable();
            $table->json('images')->nullable();
            $table->integer('views')->default(0);
            $table->string('status', 60)->default(BaseStatusEnum::PUBLISHED);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lg_services');
    }
};
