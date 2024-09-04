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
        Schema::create('ucapan_alt1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('undangan_alt1_id');
            $table->foreign('undangan_alt1_id')
            ->references('id')
            ->on('undangan_alt1s')
            ->onDelete('cascade');
            $table->string('nama');
            $table->text('ucapan');
            $table->integer('kehadiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ucapan_alt1s');
    }
};
