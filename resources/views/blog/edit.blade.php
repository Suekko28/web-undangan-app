@extends('layouts.app')

@section('content')
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
                <form action="{{ route('blog.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Blog</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="image">Gambar <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="image" name="image"
                                    placeholder="Masukkan judul" value="{{$data->judul}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="judul">Judul <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Masukkan judul" value="{{$data->judul}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="deskripsi">Deskripsi <span class="mandatory">*</span></label>
                                <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" placeholder="Masukkan isi deskripsi">{{$data->judul}}</textarea>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse mt-5">
                            <button type="submit" class="btn btn-primary ml-3 ms-3">Simpan</button>
                            <a href="{{ route('blog.index') }}" class="btn btn-danger">Batal</a>
                        </div>

                    </div>

                </form>
            </div>




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
