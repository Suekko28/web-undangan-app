<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alt1models', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alt1_rsvp');
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
        Schema::dropIfExists('alt1models');
    }
};
