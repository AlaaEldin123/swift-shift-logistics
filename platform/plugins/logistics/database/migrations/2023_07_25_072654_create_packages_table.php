<?php

use Botble\Base\Enums\BaseStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('lg_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 400)->nullable();
            $table->float('price');
            $table->string('duration');
            $table->text('features')->nullable();
            $table->string('status')->default(BaseStatusEnum::PUBLISHED);
            $table->boolean('is_popular')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lg_packages');
    }
};
