<?php

use Botble\Logistics\Enums\QuoteStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('lg_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('message');
            $table->text('fields')->nullable();
            $table->string('status')->default(QuoteStatus::READ);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lg_quotes');
    }
};
