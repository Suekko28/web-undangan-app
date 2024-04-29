@extends('layouts.app')

@section('navbar-admin')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/draft2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('style-admin.css')}}">

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
                <form action="{{ url('undangan-alternative1', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Banner Image & Music</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="banner_img">Foto Prewedding <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="banner_img" name="banner_img" placeholder="" value="{{$data->banner_img}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="music">Music <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="music" name="music" accept=".mp3">
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
                                    placeholder="Masukan nama mempelai laki-laki" value="{{$data->nama_mempelai_laki}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putra_dari_bpk">Putra dari Bapak <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putra_dari_bpk" name="putra_dari_bpk"
                                    placeholder="Putra dari bapak" value="{{$data->putra_dari_bpk}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putra_dari_ibu">Putra dari Ibu <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putra_dari_ibu" name="putra_dari_ibu"
                                    placeholder="Putra dari ibu" value="{{$data->putra_dari_ibu}}">
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
                                    name="nama_mempelai_perempuan" placeholder="Masukan nama mempelai perempuan" value="{{$data->nama_mempelai_perempuan}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putri_dari_bpk">Putri dari Bapak <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putri_dari_bpk" name="putri_dari_bpk"
                                    placeholder="Putri dari bapak" value="{{$data->putri_dari_bpk}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="putri_dari_ibu">Putri dari Ibu <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putri_dari_ibu" name="putri_dari_ibu"
                                    placeholder="Putri dari ibu" value="{{$data->putri_dari_ibu}}">
                            </div>

                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Akad</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="tgl_akad">Tanggal Akad <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tgl_akad" name="tgl_akad" placeholder="" value="{{$data->tgl_akad}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mulai_akad">Mulai Akad <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="mulai_akad" name="mulai_akad"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="selesai_akad">Selesai Akad <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="selesai_akad" name="selesai_akad"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat_akad">Alamat Akad <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_akad" name="alamat_akad" placeholder="Masukan alamat akad">{{$data->alamat_akad}}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="$data->lokasi_gmaps_akad">Lokasi Maps Resepsi <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="lokasi_gmaps_akad" name="lokasi_gmaps_akad"
                                    placeholder="Masukkan link alamat maps" value="{{$data->lokasi_gmaps_akad}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tgl_resepsi">Tanggal Resepsi <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tgl_resepsi" name="tgl_resepsi"
                                    placeholder="" value="{{$data->tgl_resepsi}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mulai_resepsi">Mulai Resepsi <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="mulai_resepsi" name="mulai_resepsi"
                                    placeholder="" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="selesai_resepsi">Selesai Resepsi <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="selesai_resepsi" name="selesai_resepsi"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat_resepsi">Alamat Resepsi <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_resepsi" name="alamat_resepsi"
                                    placeholder="Masukan alamat resepsi">{{$data->alamat_resepsi}}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="$data->lokasi_gmaps_resepsi">Lokasi Maps Resepsi <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="lokasi_gmaps" name="$data->lokasi_gmaps_resepsi"
                                    placeholder="Masukkan link alamat maps" value="{{$data->lokasi_gmaps_resepsi}}">
                            </div>

                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Galeri Foto</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="caption">Caption <span class="mandatory">*</span></label>
                                <span class="fst-italic">(Maksimal 288 Karakter)</span>
                                <textarea class="form-control" rows="5" id="caption" name="caption"
                                    placeholder="Aku tak pernah menunggumu. Kamu tak pernah sengaja datang. Tapi kita sengaja dipertemukan Tuhan.">{{$data->caption}}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img1">Foto 1 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="galeri_img1" name="galeri_img1"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img2">Foto 2 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="galeri_img2" name="galeri_img2"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img3">Foto 3 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="galeri_img3" name="galeri_img3"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img4">Foto 4 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="galeri_img4" name="galeri_img4"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img5">Foto 5 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="galeri_img5" name="galeri_img5"
                                    placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="galeri_img6">Foto 6 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="galeri_img6" name="galeri_img6"
                                    placeholder="">
                            </div>

                        </div>

                    </div>
                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Cerita Cinta Kami</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="foto_pertemuan">Foto Pertemuan <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="foto_pertemuan" name="foto_pertemuan"
                                    placeholder="" value="{{$data->foto_pertemuan}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pertemuan">Petemuan <span class="mandatory">*</span> <span
                                        class="fst-italic">(Maksimal 200 Karakter)</span>
                                </label>
                                <textarea class="form-control" rows="5" id="pertemuan" name="pertemuan"
                                    placeholder="Ceritakan pertemuan kamu dengan pasanganmu">{{$data->pertemuan}}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto_pendekatan">Foto Pendekatan <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="foto_pendekatan" name="foto_pendekatan"
                                    placeholder="" value="{{$data->foto_pendekatan}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pendekatan">Pendekatan <span class="mandatory">*</span> <span
                                        class="fst-italic">(Maksimal 200 Karakter)</span>
                                </label>
                                <textarea class="form-control" rows="5" id="pendekatan" name="pendekatan"
                                    placeholder="Ceritakan pendekatan kamu dengan pasanganmu " value="{{$data->pendekatan}}"></textarea>
                            </div>

                            
                            <div class="form-group mb-3">
                                <label for="foto_lamaran">Foto Lamaran <span class="mandatory">*</span></label>
                                <input value="{{$data->foto_lamaran}}" type="file" class="form-control" id="foto_lamaran" name="foto_lamaran" placeholder="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="lamaran">Lamaran <span class="mandatory">*</span><span
                                        class="fst-italic">(Maksimal 200 Karakter)</span></label>
                                <textarea class="form-control" rows="5" id="lamaran" name="lamaran"
                                    placeholder="Ceritakan lamaran kamu dengan pasanganmu" value="{{$data->lamaran}}"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="foto_pernikahan">Foto Pernikahan <span class="mandatory">*</span></label>
                                <input value="{{$data->foto_pernikahan}}" type="file" class="form-control" id="foto_pernikahan" name="foto_pernikahan" placeholder="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="pernikahan">Pernihakan <span class="mandatory">*</span><span
                                        class="fst-italic">(Maksimal 200 Karakter)</span></label>
                                <textarea class="form-control" rows="5" id="pernikahan" name="pernikahan"
                                    placeholder="Ceritakan rencana pernikahan kamu dengan pasanganmu">{{$data->pernikahan}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Kirim Hadiah</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="nama_rek1">Nama Rek Tertera <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_rek1" name="nama_rek1"
                                    placeholder="BCA, BRI, Dll" value="{{$data->nama_rek1}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_rek1">No. Rek Tertera <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="no_rek1" name="no_rek1"
                                    placeholder="Masukkan nomor rekening" value="{{$data->no_rek1}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="atas_nama1">Atas Nama <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="atas_nama1" name="atas_nama1"
                                    placeholder="Rudi Hermawan" value="{{$data->atas_nama1}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_rek2">Nama Rek Tertera <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_rek2" name="nama_rek2"
                                    placeholder="BCA, BRI, Dll" value="{{$data->nama_rek2}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_rek2">No. Rek Tertera <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="no_rek2" name="no_rek2"
                                    placeholder="Masukkan nomor rekening" value="{{$data->no_rek2}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="atas_nama2">Atas Nama <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="atas_nama2" name="atas_nama2"
                                    placeholder="Rudi Hermawan" value="{{$data->atas_nama2}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_rek3">Nama Rek Tertera <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_rek3" name="nama_rek3"
                                    placeholder="BCA, BRI, Dll" value="{{$data->nama_rek3}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_rek3">No. Rek Tertera <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="no_rek3" name="no_rek3"
                                    placeholder="Masukkan nomor rekening" value="{{$data->no_rek3}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="atas_nama3">Atas Nama <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="atas_nama3" name="atas_nama3"
                                    placeholder="Rudi Hermawan" value="{{$data->atas_nama3}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat_tertera">Alamat Tertera <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_tertera" name="alamat_tertera" placeholder="Masukan alamat tertera kirim hadiah" value="">{{$data->alamat_tertera}}</textarea>
                            </div>
                        </div>

                     
                        <div class="d-flex flex-row-reverse mt-5">
                            <button type="submit" class="btn btn-primary ml-3 ms-3">Simpan</button>
                            <a href="{{route('undangan-alternative1')}}" class="btn btn-danger">Batal</a>
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
