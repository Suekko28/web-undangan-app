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
                <form action="{{ url('undangan-alternative1', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    {{-- <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Banner Image & Music</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="banner_img">Foto Prewedding <span class="mandatory">*</span></label>
                                <input disabled type="file" class="form-control" id="banner_img" name="banner_img" placeholder="" value="{{$data->banner_img}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="music">Music <span class="mandatory">*</span></label>
                                <input disabled type="file" class="form-control" id="music" name="music" accept=".mp3">
                            </div>
                            
                        </div>
                    </div> --}}

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Mempelai</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="foto_mempelai_laki">Foto Mempelai Laki <span class="mandatory">*</span></label>
                                <div class="img-fluid">
                                    <img src="{{ Storage::url('' . $data->foto_mempelai_laki) }}" class="img-fluid"
                                        alt="Foto Mempelai Laki" width="200" height="200">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_mempelai_laki">Nama Mempelai Laki <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_mempelai_laki" name="nama_mempelai_laki"
                                    placeholder="Masukan nama mempelai laki-laki" value="{{ $data->nama_mempelai_laki }}"
                                    disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="putra_dari_bpk">Putra dari Bapak <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putra_dari_bpk" name="putra_dari_bpk"
                                    placeholder="Putra dari bapak" value="{{ $data->putra_dari_bpk }}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="putra_dari_ibu">Putra dari Ibu <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putra_dari_ibu" name="putra_dari_ibu"
                                    placeholder="Putra dari ibu" value="{{ $data->putra_dari_ibu }}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_instagram1">Nama Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_instagram1" name="nama_instagram1"
                                    placeholder="Masukkan nama instagram" value="{{ $data->nama_instagram1 }}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="link_instagram1">Link Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="link_instagram1" name="link_instagram1"
                                    placeholder="Masukkan link instagram" value="{{ $data->link_instagram1 }}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="foto_mempelai_perempuan">Foto Mempelai Perempuan <span
                                        class="mandatory">*</span></label>
                                <div class="img-fluid">
                                    <img src="{{ Storage::url('' . $data->foto_mempelai_perempuan) }}" class="img-fluid"
                                        alt="Foto Mempelai Perempuan" width="200" height="200">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_mempelai_perempuan">Nama Mempelai Perempuan <span
                                        class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_mempelai_perempuan"
                                    name="nama_mempelai_perempuan" placeholder="Masukan nama mempelai perempuan"
                                    value="{{ $data->nama_mempelai_perempuan }}" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="putri_dari_bpk">Putri dari Bapak <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putri_dari_bpk" name="putri_dari_bpk"
                                    placeholder="Putri dari bapak" value="{{ $data->putri_dari_bpk }}" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="putri_dari_ibu">Putri dari Ibu <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="putri_dari_ibu" name="putri_dari_ibu"
                                    placeholder="Putri dari ibu" value="{{ $data->putri_dari_ibu }}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_instagram2">Nama Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="nama_instagram2" name="nama_instagram2"
                                    placeholder="Masukkan nama instagram" value="{{ $data->nama_instagram2 }}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="link_instagram2">Link Instagram <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="link_instagram2" name="link_instagram2"
                                    placeholder="Masukkan link instagram" value="{{ $data->link_instagram2 }}" disabled>
                            </div>

                        </div>
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Akad</div>
                        <div class="fs-6">
                            {{-- <div class="form-group mb-3">
                                <label for="gambar1">Gambar 1 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="gambar1" name="gambar1"
                                    placeholder="" value="{{$data->gambar1}}" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="gambar2">Gambar 2 <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="gambar2" name="gambar2"
                                    placeholder="" value="{{$data->gambar2}}" disabled>
                            </div> --}}

                            <div class="form-group mb-3">
                                <label for="tgl_akad">Tanggal Akad <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tgl_akad" name="tgl_akad"
                                    placeholder="" value="{{$data->tgl_akad}}" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mulai_akad">Mulai Akad <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="mulai_akad" name="mulai_akad"
                                    placeholder="" value="{{$data->mulai_akad}}" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="alamat_akad">Alamat Akad <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_akad" name="alamat_akad"
                                    placeholder="Masukan alamat akad" disabled>{{$data->alamat_akad}}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="tgl_resepsi">Tanggal Resepsi <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tgl_resepsi" name="tgl_resepsi"
                                    placeholder="" value="{{$data->tgl_resepsi}}" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mulai_resepsi">Mulai Resepsi <span class="mandatory">*</span></label>
                                <input type="time" class="form-control" id="mulai_resepsi" name="mulai_resepsi"
                                    placeholder=""  value="{{$data->mulai_resepsi}}" disabled> 
                            </div>


                            <div class="form-group mb-3">
                                <label for="alamat_resepsi">Alamat Resepsi <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="alamat_resepsi" name="alamat_resepsi"
                                    placeholder="Masukan alamat resepsi" disabled>{{$data->alamat_resepsi}}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="lokasi_gmaps">Lokasi Maps <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="lokasi_gmaps" name="lokasi_gmaps"
                                    placeholder="Masukkan link alamat maps" value="{{$data->lokasi_gmaps}}" disabled>
                            </div>

                        </div>
                </form>

                <table class="table table-bordered">
                    <h6>Daftar Tamu Undangan <a href="{{ route('nama-undangan-list3', ['id' => $data]) }}" target="_blank"
                            rel="noopener noreferrer" class="link-underline-primary"><u>Sharelink</u></a></h6>
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>No</th>
                            <th>Nama Undangan</th>
                            {{-- <th>Template Message</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($nama_undangan as $item)
                            <tr class="text-center">
                                <td scope="row">{{ $i }}</td>
                                <td scope="row">{{ $item->nama_undangan }}</td>
                                {{-- Other table cells --}}
                            </tr>
                            <?php $i++; ?>
                        @endforeach

                    </tbody>

                </table>

                <div class="d-flex flex-row-reverse mt-5 mb-3">
                    <a href="{{ route('undangan-alternative3') }}" class="btn btn-primary ">Kembali</a>
                </div>
            </div>

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
