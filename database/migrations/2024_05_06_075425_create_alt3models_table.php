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
        Schema::create('alt3models', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('id_alt3_rsvp');
            $table->string('alamat');
            $table->text('ucapan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alt3models');
    }
};
