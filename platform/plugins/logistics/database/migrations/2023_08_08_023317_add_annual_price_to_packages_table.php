<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up(): void
    {
        Schema::table('lg_packages', function (Blueprint $table) {
            $table->string('annual_price', 50)->nullable()->after('price');
        });
    }
    public function down(): void
    {
        Schema::table('lg_packages', function (Blueprint $table) {
            $table->dropColumn('annual_price');
        });
    }
};
