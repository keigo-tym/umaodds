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
        Schema::create('horses', function (Blueprint $table) {
            $table->id();
            // レースID
            $table->integer('race_id');
            // 枠番
            $table->integer('frame_number');
            // 馬番
            $table->integer('horse_number');
            // 馬名
            $table->string('name');
            // 前売りオッズ
            $table->decimal('advance_odds', 5, 1)->nullable();
            // 前日オッズ
            $table->decimal('previous_odds', 5, 1)->nullable();
            // 当日12時オッズ
            $table->decimal('twelve_odds', 5, 1)->nullable();
            // 当日15時オッズ
            $table->decimal('fifteen_odds', 5, 1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horses');
    }
};
