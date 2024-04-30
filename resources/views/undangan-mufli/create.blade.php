@extends('layouts.app')

@section('navbar-admin')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/draft2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('style-admin.css') }}">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/fonts/boxicons.draft') }}" />

    <!-- Core draft -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/draft/core.draft') }}"
        class="template-customizer-core-draft" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/draft/theme-default.draft') }}"
        class="template-customizer-theme-draft" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/draft/demo.draft') }}" />

    <!-- Vendors draft -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.draft') }}" />

    <!-- Page draft -->

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/assets/vendor/js/helpers.js') }}"></script>

    <!-- Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!-- Config: Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file. -->
    <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>

    <main>

        <section class="content">
            <div class="container-fluid">
                @include('layouts.message')
                <!-- Small boxes (Stat box) -->
                <form action="{{ route('undangan-alternative1') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Nama Undangan</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="nama_undangan">Nama Undangan <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="nama_undangan" name="nama_undangan"
                                    placeholder="Masukan nama-nama undangan"></textarea>
                            </div>
                        </div>
                    </div> --}}

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Banner Image & Music</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="banner_img">Foto Opening <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="banner_img" name="banner_img" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="music">Music <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="music" name="music" accept=".mp3">
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto_prewedding">Foto Prewedding <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="foto_prewedding" name="foto_prewedding" placeholder="">
                            </div>

                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Mempelai</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="foto_mempelai_laki">Foto Mempelai Laki <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="foto_mempelai_laki" name="foto_mempelai_laki"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_mempelai_laki">Nama Mempelai Laki <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_mempelai_laki" name="nama_mempelai_laki"
                                    placeholder="Masukan nama mempelai laki-laki">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putra_dari_bpk">Putra dari Bapak <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putra_dari_bpk" name="putra_dari_bpk"
                                    placeholder="Putra dari bapak">
                            </div>

                            <div class="form-group mb-3">
                                <label for="putra_dari_ibu">Putra dari Ibu <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putra_dari_ibu" name="putra_dari_ibu"
                                    placeholder="Putra dari ibu">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_instagram1">Nama Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_instagram1" name="nama_instagram1"
                                    placeholder="Masukkan nama instagram">
                            </div>

                            <div class="form-group mb-3">
                                <label for="link_instagram1">Link Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="link_instagram1" name="link_instagram1"
                                    placeholder="Masukkan link instagram">
                            </div>



                            <div class="form-group mb-3">
                                <label for="foto_mempelai_perempuan">Foto Mempelai Perempuan <span
                                        class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="foto_mempelai_perempuan"
                                    name="foto_mempelai_perempuan" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_mempelai_perempuan">Nama Mempelai Perempuan <span
                                        class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_mempelai_perempuan"
                                    name="nama_mempelai_perempuan" placeholder="Masukan nama mempelai perempuan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putri_dari_bpk">Putri dari Bapak <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putri_dari_bpk" name="putri_dari_bpk"
                                    placeholder="Putri dari bapak">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putri_dari_ibu">Putri dari Ibu <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putri_dari_ibu" name="putri_dari_ibu"
                                    placeholder="Putri dari ibu">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_instagram2">Nama Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_instagram2" name="nama_instagram2"
                                    placeholder="Masukkan nama instagram">
                            </div>

                            <div class="form-group mb-3">
                                <label for="link_instagram2">Link Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="link_instagram2" name="link_instagram2"
                                    placeholder="Masukkan link instagram">
                            </div>

                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Love Story</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="judul_cerita1">Judul Cerita <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="judul_cerita1" name="judul_cerita1"
                                    placeholder="Masukkan Judul Ceritamu">
                            </div>

                            <div class="form-group mb-3">
                                <label for="tgl_cerita1">Tanggal <span class="fst-italic">(Opsional)</span></label>
                                <input type="date" class="form-control" id="tgl_cerita1" name="tgl_cerita1"
                                    placeholder="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="perkenalan">Cerita <span class="fst-italic">(Opsional)</span><span
                                        class="fst-italic">(Maksimal 200 Karakter)</span>
                                </label>
                                <textarea class="form-control" rows="5" id="perkenalan" name="perkenalan"
                                    placeholder="Ceritakan perkenalan kamu dengan pasanganmu"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="judul_cerita2">Judul Cerita <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="judul_cerita2" name="judul_cerita2"
                                    placeholder="Masukkan Judul Ceritamu">
                            </div>

                            <div class="form-group mb-3">
                                <label for="tgl_cerita2">Tanggal <span class="fst-italic">(Opsional)</span></label>
                                <input type="date" class="form-control" id="tgl_cerita2" name="tgl_cerita2"
                                    placeholder="">
                            </div>


                            <div class="form-group mb-3">
                                <label for="jadian">Cerita <span class="fst-italic">(Opsional)</span><span
                                        class="fst-italic">(Maksimal 200 Karakter)</span>
                                </label>
                                <textarea class="form-control" rows="5" id="jadian" name="jadian"
                                    placeholder="Ceritakan jadian kamu dengan pasanganmu "></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="judul_cerita3">Judul Cerita <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="judul_cerita3" name="judul_cerita3"
                                    placeholder="Masukkan Judul Ceritamu">
                            </div>

                            <div class="form-group mb-3">
                                <label for="tgl_cerita3">Tanggal <span class="fst-italic">(Opsional)</span></label>
                                <input type="date" class="form-control" id="tgl_cerita3" name="tgl_cerita3"
                                    placeholder="">
                            </div>


                            <div class="form-group mb-3">
                                <label for="tunangan">Cerita <span class="fst-italic">(Opsional)</span></label>
                                <textarea class="form-control" rows="5" id="tunangan" name="tunangan"
                                    placeholder="Ceritakan tunangan kamu dengan pasanganmu"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="judul_cerita4">Judul Cerita <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="judul_cerita4" name="judul_cerita4"
                                    placeholder="Masukkan Judul Ceritamu">
                            </div>


                            <div class="form-group mb-3">
                                <label for="tgl_cerita4">Tanggal <span class="fst-italic">(Opsional)</span></label>
                                <input type="date" class="form-control" id="tgl_cerita4" name="tgl_cerita4"
                                    placeholder="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="pernikahan">Cerita <span class="fst-italic">(Opsional)</span></label>
                                <textarea class="form-control" rows="5" id="pernikahan" name="pernikahan"
                                    placeholder="Ceritakan rencana pernikahan kamu dengan pasanganmu"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Akad</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="tgl_akad">Tanggal Akad <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tgl_akad" name="tgl_akad"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mulai_akad">Mulai Akad <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="mulai_akad" name="mulai_akad"
                                    placeholder="">
                            </div>
                        
                            <div class="form-group mb-3">
                                <label for="alamat_akad">Alamat Akad <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_akad" name="alamat_akad"
                                    placeholder="Masukan alamat akad"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="tgl_resepsi">Tanggal Resepsi <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tgl_resepsi" name="tgl_resepsi"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mulai_resepsi">Mulai Resepsi <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="mulai_resepsi" name="mulai_resepsi"
                                    placeholder="">
                            </div>
                          

                            <div class="form-group mb-3">
                                <label for="alamat_resepsi">Alamat Resepsi <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_resepsi" name="alamat_resepsi"
                                    placeholder="Masukan alamat resepsi"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="lokasi_gmaps">Lokasi Maps <span
                                        class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="lokasi_gmaps"
                                    name="lokasi_gmaps" placeholder="Masukkan link alamat maps">
                            </div>

                        </div>
                    </div>


                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Galeri Foto</div>
                        <div class="fs-6">
                           
                            <div class="form-group mb-3">
                                <label for="galeri_img1">Foto 1 <span class="fst-italic">(Opsional)</span></label>
                                <input type="file" class="form-control" id="galeri_img1" name="galeri_img1"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img2">Foto 2 <span class="fst-italic">(Opsional)</span></label>
                                <input type="file" class="form-control" id="galeri_img2" name="galeri_img2"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img3">Foto 3 <span class="fst-italic">(Opsional)</span></label>
                                <input type="file" class="form-control" id="galeri_img3" name="galeri_img3"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img4">Foto 4 <span class="fst-italic">(Opsional)</span></label>
                                <input type="file" class="form-control" id="galeri_img4" name="galeri_img4"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img5">Foto 5 <span class="fst-italic">(Opsional)</span></label>
                                <input type="file" class="form-control" id="galeri_img5" name="galeri_img5"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img6">Foto 6 <span class="fst-italic">(Opsional)</span></label>
                                <input type="file" class="form-control" id="galeri_img6" name="galeri_img6"
                                    placeholder="">
                            </div>

                        </div>

                    </div>

                  

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Kirim Hadiah</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="nama_rek1">Nama Rek Tertera <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="nama_rek1" name="nama_rek1"
                                    placeholder="BCA, BRI, Dll">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_rek1">No. Rek Tertera <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="no_rek1" name="no_rek1"
                                    placeholder="Masukkan nomor rekening">
                            </div>
                            <div class="form-group mb-3">
                                <label for="atas_nama1">Atas Nama <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="atas_nama1" name="atas_nama1"
                                    placeholder="Rudi Hermawan">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_rek2">Nama Rek Tertera <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="nama_rek2" name="nama_rek2"
                                    placeholder="BCA, BRI, Dll">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_rek2">No. Rek Tertera <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="no_rek2" name="no_rek2"
                                    placeholder="Masukkan nomor rekening">
                            </div>
                            <div class="form-group mb-3">
                                <label for="atas_nama2">Atas Nama <span class="fst-italic">(Opsional)</span></label>
                                <input type="text" class="form-control" id="atas_nama2" name="atas_nama2"
                                    placeholder="Rudi Hermawan">
                            </div>

                            <div class="form-group mb-3">
                                <label for="alamat_tertera">Alamat Tertera <span
                                        class="fst-italic">(Opsional)</span></label>
                                <textarea class="form-control" rows="5" id="alamat_tertera" name="alamat_tertera"
                                    placeholder="Masukan alamat tertera kirim hadiah"></textarea>
                            </div>
                        </div>


                        <div class="d-flex flex-row-reverse mt-5">
                            <button type="submit" class="btn btn-primary ml-3 ms-3">Simpan</button>
                            <a href="{{ route('undangan-alternative1') }}" class="btn btn-danger">Batal</a>
                        </div>

                    </div>

                    <!-- /.card-body -->

                </form>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('isi_artikel');
        </script>

    </main>

    <script src="{{ asset('assets/admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
@endsection
