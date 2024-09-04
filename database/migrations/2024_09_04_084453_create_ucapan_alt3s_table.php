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
        Schema::create('ucapan_alt3s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('undangan_alt3_id');
            $table->foreign('undangan_alt3_id')
                ->references('id')
                ->on('undangan_alt3s')
                ->onDelete('cascade');
            $table->string('nama');
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
        Schema::dropIfExists('ucapan_alt3s');
    }
};
