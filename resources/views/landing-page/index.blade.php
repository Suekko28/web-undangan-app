<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>

    <!-- BOOTSTRAP 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS STYLE -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="nav-link trigger" href="#hero">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link trigger active" aria-current="page" href="#hero">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link trigger" href="#promo">Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link trigger" href="#produk">Produk Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link trigger" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link trigger" href="#tanya-kami">Tanya Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HERO -->
    <section class="hero" id="hero">
        <h4>Bikin Doi Makin Happy Terus</h4>
        <p>Undangan Digital</p>
        <a href="#produk" class="trigger btn btn-custom">lihat Layanan</a>
    </section>
    <!-- HERO END -->

    <!-- PROMO -->
    <section class="promo" id="promo">
        <div class="promo-cover">
            <div class="container-custom">
                <h4>Promo Saat Ini</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card card-promo-custom"></div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card card-promo-custom"></div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card card-promo-custom"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROMO END -->

    <!-- PRODUK -->
    <section class="produk" id="produk">
        <div class="produk-cover">
            <div class="container-custom">
                <h4>Produk Kami</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="card card-produk-custom">
                            <div class="card-produk-img"></div>
                            <div class="card-produk-title">Undangan Digital</div>
                            <div class="card-produk-detail">Undangan Digital</div>
                            <a href="#" class="btn btn-custom-2 mt-2 mb-4">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="card card-produk-custom">
                            <div class="card-produk-img"></div>
                            <div class="card-produk-title">Cetak Foto & Figura</div>
                            <div class="card-produk-detail">Undangan Digital</div>
                            <a href="#" class="btn btn-custom-2 mt-2 mb-4">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="card card-produk-custom">
                            <div class="card-produk-img"></div>
                            <div class="card-produk-title">Gambarin & Figura</div>
                            <div class="card-produk-detail">Undangan Digital</div>
                            <a href="#" class="btn btn-custom-2 mt-2 mb-4">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="card card-produk-custom">
                            <div class="card-produk-img"></div>
                            <div class="card-produk-title">Seserahan</div>
                            <div class="card-produk-detail">Undangan Digital</div>
                            <a href="#" class="btn btn-custom-2 mt-2 mb-4">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUK END -->

    <!-- BLOG -->
    <section class="blog" id="blog">
        <div class="container-custom">
            <h4>Blog</h4>
            <div class="over">
                @foreach ($data as $item)
                    <div class="card card-blog-custom">
                        <div class="card-blog-img">
                            <img class="rounded-4" src="{{asset('storage/blog/' . $item->image)}}" alt="" width="100%" height="228">
                        </div>
                        <div class="card-blog-date">{{ $item->created_at->format('d-F-Y') }}</div>
                        <div class="card-blog-title">{{$item->judul}}</div>
                        <div class="card-blog-detail">{{$item->deskripsi}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <a href="#" class="btn btn-custom-3 my-4">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- BLOG END -->

    <!-- TANYA KAMI -->
    <section class="tanya-kami" id="tanya-kami">
        <div class="container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="card card-tanya-kami-custom-left">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="card card-tanya-kami-custom-right">
                        <h4>Hubungi Kami</h4>
                        <form action="">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" placeholder="Pesan"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-custom">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TANYA KAMI END -->

    <!-- MARKET PLACE -->
    <section class="market-place" id="market-pace">
        <div class="container-custom">
            <h4>Market Place</h4>
            <div class="market-place-button-container mt-3">
                <a href="#" class="btn-market-place">
                    <img src="{{ asset('img/tokopedia.png') }}" alt="tokopedia">
                    <span>tokopedia</span>
                </a>
                <a href="#" class="btn-market-place">
                    <img src="{{ asset('img/shopee.png') }}" alt="shopee">
                    <span>Shopee</span>
                </a>
                <a href="#" class="btn-market-place">
                    <img src="{{ asset('img/tiktok.png') }}" alt="tiktok">
                    <span>Tiktok Shop</span>
                </a>
            </div>
        </div>
    </section>
    <!-- MARKET PLACE END -->

    <!-- FOOTER -->
    <section class="footer" id="footer">
        <span>
            © 2024 Jejak Kebahagiaan. All Rights Reserved.
        </span>
    </section>
    <!-- FOOTER END -->

    <!-- BOOTSTRAP 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <!-- JS STYLE -->
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
