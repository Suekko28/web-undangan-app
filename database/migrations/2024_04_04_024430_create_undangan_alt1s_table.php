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
        Schema::create('undangan_alt1s', function (Blueprint $table) {
            $table->id();
            // $table->text('nama_undangan');
            $table->string('banner_img');
            $table->string('foto_mempelai_laki');
            $table->string('nama_mempelai_laki');
            $table->string('putra_dari_bpk');
            $table->string('putra_dari_ibu');
            $table->string('foto_mempelai_perempuan');
            $table->string('nama_mempelai_perempuan');
            $table->string('putri_dari_bpk');
            $table->string('putri_dari_ibu');
            $table->date('tgl_akad');
            $table->time('mulai_akad');
            $table->time('selesai_akad');
            $table->text('alamat_akad');
            $table->date('tgl_resepsi');
            $table->time('mulai_resepsi');
            $table->time('selesai_resepsi');
            $table->text('alamat_resepsi');
            $table->string('lokasi_gmaps_akad');
            $table->string('lokasi_gmaps_resepsi');
            $table->text('caption');
            $table->string('galeri_img1');
            $table->string('galeri_img2');
            $table->string('galeri_img3');
            $table->string('galeri_img4');
            $table->string('galeri_img5');
            $table->string('galeri_img6');
            $table->text('pertemuan')->nullable();
            $table->text('pendekatan')->nullable();
            $table->text('lamaran')->nullable();
            $table->text('pernikahan')->nullable();
            $table->string('nama_rek1')->nullable();
            $table->integer('no_rek1')->nullable();
            $table->string('atas_nama1')->nullable();
            $table->string('nama_rek2')->nullable();
            $table->integer('no_rek2')->nullable();
            $table->string('atas_nama2')->nullable();
            $table->string('nama_rek3')->nullable();
            $table->integer('no_rek3')->nullable();
            $table->string('atas_nama3')->nullable();
            $table->text('alamat_tertera')->nullable();
            $table->string('music');
            $table->string('foto_pertemuan');
            $table->string('foto_pendekatan');
            $table->string('foto_lamaran');
            $table->string('foto_pernikahan');
            $table->string('judul_cerita1')->nullable();
            $table->string('judul_cerita2')->nullable();
            $table->string('judul_cerita3')->nullable();
            $table->string('judul_cerita4')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangan_alt1s');
    }
};
