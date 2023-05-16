<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('horses', function (Blueprint $table) {
            // 色を追加
            $table->string('color')->nullable();
            // 着順を追加
            $table->integer('result')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horses', function (Blueprint $table) {
            //
        });
    }
};
