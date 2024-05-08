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
        Schema::create('undangan_alt3s', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img');
            $table->string('foto_prewedding');
            $table->string('foto_mempelai_laki');
            $table->string('nama_mempelai_laki');
            $table->string('putra_dari_bpk');
            $table->string('putra_dari_ibu');
            $table->string('nama_instagram1');
            $table->string('link_instagram1');
            $table->string('nama_instagram2');
            $table->string('link_instagram2');
            $table->string('foto_mempelai_perempuan');
            $table->string('nama_mempelai_perempuan');
            $table->string('putri_dari_bpk');
            $table->string('putri_dari_ibu');
            $table->date('tgl_akad');
            $table->time('mulai_akad');
            $table->text('alamat_akad');
            $table->date('tgl_resepsi');
            $table->time('mulai_resepsi');
            $table->text('alamat_resepsi');
            $table->string('lokasi_gmaps');
            $table->string('galeri_img1')->nullable();
            $table->string('galeri_img2')->nullable();
            $table->string('galeri_img3')->nullable();
            $table->string('galeri_img4')->nullable();
            $table->string('galeri_img5')->nullable();
            $table->text('perkenalan')->nullable();
            $table->text('jadian')->nullable();
            $table->text('tunangan')->nullable();
            $table->text('pernikahan')->nullable();
            $table->string('nama_rek1')->nullable();
            $table->integer('no_rek1')->nullable();
            $table->string('atas_nama1')->nullable();
            $table->string('nama_rek2')->nullable();
            $table->integer('no_rek2')->nullable();
            $table->string('atas_nama2')->nullable();
            $table->text('alamat_tertera')->nullable();
            $table->string('music');
            $table->string('judul_cerita1')->nullable();
            $table->string('judul_cerita2')->nullable();
            $table->string('judul_cerita3')->nullable();
            $table->string('judul_cerita4')->nullable();
            $table->date('tgl_cerita1')->nullable();
            $table->date('tgl_cerita2')->nullable();
            $table->date('tgl_cerita3')->nullable();
            $table->date('tgl_cerita4')->nullable();
            $table->string('caption')->nullable();
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('video')->nullable();
            $table->string('nama_pengarang')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangan_alt3s');
    }
};
