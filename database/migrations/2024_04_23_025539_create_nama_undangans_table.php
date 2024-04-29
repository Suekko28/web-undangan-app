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
        Schema::create('nama_undangans', function (Blueprint $table) {
            $table->id();
            $table->text('nama_undangan');
            $table->unsignedBigInteger('undangan_alt1_id');
            $table->foreign('undangan_alt1_id')
            ->references('id')
            ->on('undangan_alt1s')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_undangans');
    }
};
