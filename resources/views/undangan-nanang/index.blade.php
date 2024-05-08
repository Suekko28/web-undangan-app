<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <link rel="stylesheet" href="{{ asset('./home-nanang.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Garamond:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marck Script:wght@400&display=swap" />
    <link rel="stylesheet"12
        href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rouge Script:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Optima:wght@400&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=NanumMyeongjo:wght@400;700;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Serif Display:wght@400&display=swap" />
</head>

<body>
    <div class="home">
        <div class="navigation">
            <button class="menu" id="menu">
                <img class="home-icon" alt="" src="{{ asset('./assets/home.svg') }}" />
            </button>
            <button class="menu" id="menu1">
                <div class="love">
                    <img class="vector-stroke-icon" alt="" src="{{ asset('./assets/vector-stroke.svg') }}" />

                    <div class="badge6">
                        <div class="div15">12</div>
                    </div>
                </div>
            </button>
            <button class="menu" id="menu2">
                <img class="image-icon" alt="" src="{{ asset('./assets/image.svg') }}" />
            </button>
            <button class="menu" id="menu3">
                <img class="calendar-icon" alt="" src="{{ asset('./assets/calendar.svg') }}" />
            </button>
            <button class="menu" id="menu4">
                <img class="image-icon" alt="" src="{{ asset('./assets/vector-1.svg') }}" />
            </button>
        </div>
        <section class="banner" data-scroll-to="youngJapaneseCouple1Image"
            style="background-image: url('{{ Storage::url('' . $data->foto_prewedding) }}');">
            {{-- <img class="young-japanese-couple-1-icon1" alt=""
                src="{{ asset('./assets/BannerImage.jpg') }}" data-scroll-to="youngJapaneseCouple1Image" /> --}}

            <div class="card4">
                @if (!empty($data->caption) && !empty($data->nama_pengarang))
                    <div class="quotes">
                        <span class="title">{{ $data->caption }}</span>
                        <span class="paragraph">{{ $data->nama_pengarang }}</span>
                    </div>
                @else
                    <div class="quotes" style="display: none"></div>
                @endif
                <div class="wedding-timer">
                    <div id="timer"></div>
                    <div class="wedding-date-info">
                        <span
                            class="paragraph">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_akad)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                    </div>
                </div>
            </div>
            <div class="text1">
                <audio autoplay loop controls id="myAudio" src="{{ asset('./assets/lagu-nanang.mp3') }}"></audio>

                <button class="floating-button" id="floatingButton">
                    <img class="play-icon" alt="" src="{{ asset('./assets/untitled1-1@2x.png') }}" />
                    <img class="pause-1-icon" alt="" src="{{ asset('./assets/pause2.gif') }}" />
                </button>
            </div>
        </section>

        <section class="kedua-mempelai" data-scroll-to="textBlockQuote">
            <div class="mempelai-pria">
                <div class="foto-mempelai-pria">
                    <img class="foto-mempelai-wanita" src="{{ Storage::url('' . $data->foto_mempelai_laki) }}" alt="">
                </div>
                <div class="info-mempelai-pria">
                    <div class="detail">
                        <span class="label">THE GROOM</span>
                        <span class="title">{{ $data->nama_mempelai_laki }}</span>
                        <span class="paragraph">Bapak {{ $data->putra_dari_bpk }} dan Ibu
                            {{ $data->putra_dari_ibu }}</span>
                    </div>
                    <a target="_blank" class="button-link" href="{{ $data->link_instagram1 }}" target="_blank"
                        style="text-direction:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.75 6C1.75 3.92893 3.42893 2.25 5.5 2.25H14.5C16.5711 2.25 18.25 3.92893 18.25 6V15C18.25 17.0711 16.5711 18.75 14.5 18.75H5.5C3.42893 18.75 1.75 17.0711 1.75 15V6ZM5.5 3.75C4.25736 3.75 3.25 4.75736 3.25 6V15C3.25 16.2426 4.25736 17.25 5.5 17.25H14.5C15.7426 17.25 16.75 16.2426 16.75 15V6C16.75 4.75736 15.7426 3.75 14.5 3.75H5.5Z"
                                fill="#1D1C16" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 7.5625C8.37766 7.5625 7.0625 8.87766 7.0625 10.5C7.0625 12.1223 8.37766 13.4375 10 13.4375C11.6223 13.4375 12.9375 12.1223 12.9375 10.5C12.9375 8.87766 11.6223 7.5625 10 7.5625ZM5.5625 10.5C5.5625 8.04924 7.54924 6.0625 10 6.0625C12.4508 6.0625 14.4375 8.04924 14.4375 10.5C14.4375 12.9508 12.4508 14.9375 10 14.9375C7.54924 14.9375 5.5625 12.9508 5.5625 10.5Z"
                                fill="#1D1C16" />
                            <path
                                d="M15.6875 5.8125C15.6875 6.36478 15.2398 6.8125 14.6875 6.8125C14.1352 6.8125 13.6875 6.36478 13.6875 5.8125C13.6875 5.26022 14.1352 4.8125 14.6875 4.8125C15.2398 4.8125 15.6875 5.26022 15.6875 5.8125Z" />
                        </svg>
                        {{ $data->nama_instagram1 }}
                    </a>
                </div>
            </div>
            <div class="mempelai-wanita">
                <div class="info-mempelai-wanita">
                    <div class="detail">
                        <span class="label">THE BRIDGE</span>
                        <span class="title">{{ $data->nama_mempelai_perempuan }}</span>
                        <span class="paragraph">Bapak {{ $data->putri_dari_bpk }} dan Ibu
                            {{ $data->putri_dari_ibu }}</span>
                    </div>
                    <a target="_blank" class="button-link" href="{{ $data->link_instagram2 }}" target="_blank"
                        style="text-direction:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.75 6C1.75 3.92893 3.42893 2.25 5.5 2.25H14.5C16.5711 2.25 18.25 3.92893 18.25 6V15C18.25 17.0711 16.5711 18.75 14.5 18.75H5.5C3.42893 18.75 1.75 17.0711 1.75 15V6ZM5.5 3.75C4.25736 3.75 3.25 4.75736 3.25 6V15C3.25 16.2426 4.25736 17.25 5.5 17.25H14.5C15.7426 17.25 16.75 16.2426 16.75 15V6C16.75 4.75736 15.7426 3.75 14.5 3.75H5.5Z"
                                fill="#1D1C16" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 7.5625C8.37766 7.5625 7.0625 8.87766 7.0625 10.5C7.0625 12.1223 8.37766 13.4375 10 13.4375C11.6223 13.4375 12.9375 12.1223 12.9375 10.5C12.9375 8.87766 11.6223 7.5625 10 7.5625ZM5.5625 10.5C5.5625 8.04924 7.54924 6.0625 10 6.0625C12.4508 6.0625 14.4375 8.04924 14.4375 10.5C14.4375 12.9508 12.4508 14.9375 10 14.9375C7.54924 14.9375 5.5625 12.9508 5.5625 10.5Z"
                                fill="#1D1C16" />
                            <path
                                d="M15.6875 5.8125C15.6875 6.36478 15.2398 6.8125 14.6875 6.8125C14.1352 6.8125 13.6875 6.36478 13.6875 5.8125C13.6875 5.26022 14.1352 4.8125 14.6875 4.8125C15.2398 4.8125 15.6875 5.26022 15.6875 5.8125Z" />
                        </svg>
                        {{ $data->nama_instagram2 }}
                    </a>
                </div>
                <div class="foto-mempelai-wanita"> 
                    <img class="foto-mempelai-wanita" src="{{ Storage::url('' . $data->foto_mempelai_perempuan) }}" alt="">
                </div>
            </div>
        </section>

        <section class="our-love-story-parent">
            <span class="paragraph">OUR LOVE STORY</span>
            <div class="timeline-container">
                <div class="timeline">
                    @if (!empty($data->perkenalan) && !empty($data->tgl_cerita1) && !empty($data->judul_cerita1))
                        <div class="container left">
                            <div class="content">
                                <!-- <div class="foto-story-1"></div> -->
                                <div class="detail-story">
                                    <span
                                        class="label">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_cerita1)->locale('id')->isoFormat('MMM DD, YYYY') }}</span>
                                    <span class="title">{{ $data->judul_cerita1 }}</span>
                                    <span class="paragraph"> {{ $data->perkenalan }}</span>
                                </div>
                            </div>
                        @else
                            <div class="content" style="display: none"></div>
                            <div class="container" style="display: none"></div>
                        </div>
                    @endif
                    @if (!empty($data->jadian) && !empty($data->tgl_cerita2) && !empty($data->judul_cerita2))
                        <div class="container right">
                            <div class="content">
                                <div class="detail-story">
                                    <span
                                        class="label">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_cerita2)->locale('id')->isoFormat('MMM DD, YYYY') }}</span>
                                    <span class="title">{{ $data->judul_cerita2 }}</span>
                                    <span class="paragraph"> {{ $data->jadian }}</span>
                                </div>
                            </div>
                        @else
                            <div class="content" style="display: none"></div>
                            <div class="container" style="display: none"></div>
                        </div>
                    @endif
                    @if (!empty($data->tunangan) && !empty($data->tgl_cerita3) && !empty($data->judul_cerita3))
                        <div class="container left">
                            <div class="content">
                                <div class="detail-story">
                                    <span
                                        class="label">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_cerita3)->locale('id')->isoFormat('MMM DD, YYYY') }}</span>
                                    <span class="title">{{ $data->judul_cerita3 }}</span>
                                    <span class="paragraph"> {{ $data->tunangan }}</span>
                                </div>
                            </div>
                        @else
                            <div class="content" style="display: none"></div>
                            <div class="container" style="display: none"></div>

                        </div>
                    @endif
                    @if (!empty($data->pernikahan) && !empty($data->tgl_cerita4) && !empty($data->judul_cerita4))
                        <div class="container right">
                            <div class="content">
                                <div class="detail-story">
                                    <span
                                        class="label">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_cerita4)->locale('id')->isoFormat('MMM DD, YYYY') }}</span>
                                    <span class="title">{{ $data->judul_cerita4 }}</span>
                                    <span class="paragraph"> {{ $data->pernikahan }}</span>
                                </div>
                            </div>
                        @else
                            <div class="content" style="display: none"></div>
                            <div class="container" style="display: none"></div>

                        </div>
                    @endif
                    {{-- <div class="container left">
                        <div class="content">
                            <div class="detail-story">
                                <span class="label">JAN 01, 2019</span>
                                <span class="title">Pertama Bertemu</span>
                                <span class="paragraph">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec
                                    admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret
                                    expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</span>
                            </div>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <div class="detail-story">
                                <span class="label">JAN 01, 2019</span>
                                <span class="title">Pertama Bertemu</span>
                                <span class="paragraph">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec
                                    admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret
                                    expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>


        <section class="spacer" data-scroll-to="spacer">
            <span class="paragraph">OUR MOMENT</span>
            @if (!empty($data->caption) && !empty($data->nama_pengarang)  && !empty($data->video))
            <div class="rectangle-path">
                <div class="column">
                    <span class="title">
                        {{ $data->caption }}
                    </span>
                    <span class="paragraph">{{$data->nama_pengarang}}<span>
                </div>
                <div class="frame-video">
                    <video autoplay muted loop controls src="{{ Storage::url('' . $data->video) }}"></video>
                </div>
                <div class="frame-video" style="display: none"></div>
            </div>
            @else 
            <div class="rectangle-path" style="display: none"></div>
            @endif
            <div class="scroll">
                <ul>
                    <li>
                        @if ($data->galeri_img1 && Storage::exists($data->galeri_img1))
                            <img class="foto-ganjil" src="{{ Storage::url($data->galeri_img1) }}" alt="">
                        @else
                            <div class="foto-ganjil" style="display: none"></div>
                        @endif
                    </li>
                    <li>
                        @if ($data->galeri_img2 && Storage::exists($data->galeri_img2))
                            <img class="foto-genep" src="{{ Storage::url($data->galeri_img2) }}" alt="">
                        @else
                            <div class="foto-genap" style="display: none"></div>
                        @endif
                    </li>
                    <li>
                        @if ($data->galeri_img3 && Storage::exists($data->galeri_img3))
                            <img class="foto-ganjil" src="{{ Storage::url($data->galeri_img3) }}" alt="">
                        @else
                            <div class="foto-ganjil" style="display: none"></div>
                        @endif
                    </li>
                    <li>
                        @if ($data->galeri_img4 && Storage::exists($data->galeri_img4))
                            <img class="foto-genep" src="{{ Storage::url($data->galeri_img4) }}" alt="">
                        @else
                            <div class="foto-genap" style="display: none"></div>
                        @endif
                    </li>
                    <li>
                        @if ($data->galeri_img5 && Storage::exists($data->galeri_img5))
                            <img class="foto-ganjil" src="{{ Storage::url($data->galeri_img5) }}" alt="">
                        @else
                            <div class="foto-ganjil" style="display: none"></div>
                        @endif
                    </li>
                </ul>
            </div>
        </section>


        <section class="wedding-date-address" data-scroll-to="rekeningField">
            <div class="photo-mix">
                <div class="foto-depan">
                    <img class="foto-depan" src="{{ Storage::url('' . $data->gambar1) }}" alt="">
                </div>
                <div class="foto-belakang">
                    <img class="foto-belakang" src="{{ Storage::url('' . $data->gambar2) }}" alt="">
                </div>
                {{-- <img src="{{ Storage::url($data->gambar2) }}" alt=""> --}}
            </div>
            <div class="resepsi-akad">
                <div class="info-akad">
                    <span class="title">Akad Nikah</span>
                    <div class="detail-waktu">
                        <span
                            class="paragpraph">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_akad)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                        <span class="paragraph">PUKUL {{ \Carbon\Carbon::parse($data->mulai_akad)->format('H:i') }}
                            WIB - SELESAI</span>
                    </div>
                    <span class="paragraph">{{ $data->alamat_akad }}
                    </span>
                </div>
                <div class="devider5"></div>
                <div class="info-resepsi">
                    <span class="title">Resepsi</span>
                    <div class="detail-waktu">
                        <span
                            class="paragpraph">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_resepsi)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                        <span class="paragraph">PUKUL {{ \Carbon\Carbon::parse($data->mulai_resepsi)->format('H:i') }}
                            WIB - SELESAI</span>
                    </div>
                    <span class="paragraph">{{ $data->alamat_resepsi }}
                    </span>
                </div>
                <a target="_blank" class="outline-button" href="{{ $data->lokasi_gmaps }}">
                    Lihat Lokasi
                </a>
            </div>

        </section>


        <section class="hadiah-area">
            <span class="paragraph">KIRIM HADIAH</span>
            <div class="kirim-hadiah5">
                <div class="question4">
                    <div class="kirim-hadiah-container">
                        <span class="title">Kirim Hadiah</span>
                        <span class="paragraph">Jika kamu tidak bisa hadir, kami bersedia untuk menerima hadiah
                            dalam bentuk :</span>
                    </div>
                    <div class="substitute-present">
                        <button class="button20">Transfer ke no. rekening tertera</button>
                        <div class="button21">
                            <button class="kirim-kado-ke2">Kirim kado ke alamat tertera</button>
                        </div>
                    </div>
                </div>
                <div class="card-list5">
                    @if (!empty($data->nama_rek1) || !empty($data->no_rek1) || !empty($data->atas_nama1))
                        <div class="card12">
                            <span class="title">{{ $data->nama_rek1 }}</span>
                            <div class="body5">
                                <b class="b20" id="copyText">{{ $data->no_rek1 }}</b>
                                <img class="copy" alt="" id="copyButton"
                                    src="{{ asset('./assets/copy.svg') }}" />
                            </div>
                            <div class="an-rudi-hermina4">an {{ $data->atas_nama1 }}</div>
                        </div>
                    @else
                        <div class="card12" style="display: none"></div>
                    @endif

                    @if (!empty($data->nama_rek2) || !empty($data->no_rek2) || !empty($data->atas_nama2))
                        <div class="card13">
                            <span class="title">{{ $data->nama_rek2 }}</span>
                            <div class="body6">
                                <b class="b21" id="copyText2">{{ $data->no_rek2 }}</b>
                                <img class="copy2" alt="" id="copyButton2"
                                    src="{{ asset('./assets/copy.svg') }}" />
                            </div>
                            <div class="an-rudi-hermina5">an {{ $data->atas_nama2 }}</div>
                        </div>
                    @else
                        <div class="card13" style="display: none"></div>
                    @endif


                </div>
            </div>
        </section>

        <section class="request-prayers" data-scroll-to="requestPrayers">
            <div class="our-moment2">OUR MOMENT</div>
            <form class="frame-parent52" method="POST" action="{{ url('/undangan-alt3/index') }}">
                @csrf
                <div class="frame-parent53">
                    <div class="frame-parent54">
                        <div class="the-groom-container">
                            <b class="the-groom4">THE GROOM</b>
                            <div class="ucapan-doa3">Ucapan & Doa</div>
                        </div>
                        @include('message')
                        <div class="row-input2">
                            <div class="input10">
                                <div class="nama1">Nama</div>
                                <div class="field7">
                                    <input name="nama" class="masukkan-nama-kamu3"
                                        placeholder="Masukkan nama kamu" type="text" />
                                </div>
                            </div>
                            <div class="input10">
                                <div class="nama1">Alamat</div>
                                <div class="field7">
                                    <input name="alamat" class="masukkan-nama-kamu3"
                                        placeholder="Masukkan alamat kamu" type="text" />
                                </div>
                            </div>

                            <div class="ucapan-doa-container">
                                <div class="ucapan-doa9">Ucapan & Doa</div>
                                <textarea class="field35" name="ucapan" placeholder="Kirim ucapan & doa" rows="6" cols="28"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button22">
                        <div class="mail9">
                            <img class="vector-icon10" alt="" src="./assets/vector.svg" />
                            <div class="badge11">
                                <div class="div20">12</div>
                            </div>
                        </div>
                        <b class="kirim1">Kirim</b>
                        <img class="add-icon9" alt="" src="./assets/add.svg" />
                    </button>
                </div>
                {{-- <div class="button-kirim">
                    @foreach ($data as $item)
                        <div class="frame-parent55">
                            <div class="hari-parent">
                                <div class="title2">{{ $item->nama }}</div>
                                <b class="label">{{ $item->alamat }}</b>
                            </div>
                            <div class="paragraph2">{{ $item->ucapan }}</div>
                        </div>
                    @endforeach


                </div> --}}
            </form>
        </section>

    </div>

    <script>
        var menu = document.getElementById("menu");
        if (menu) {
            menu.addEventListener("click", function() {
                var anchor = document.querySelector(
                    "[data-scroll-to='youngJapaneseCouple1Image']"
                );
                if (anchor) {
                    anchor.scrollIntoView({
                        block: "start",
                        behavior: "smooth"
                    });
                }
            });
        }

        var menu1 = document.getElementById("menu1");
        if (menu1) {
            menu1.addEventListener("click", function() {
                var anchor = document.querySelector("[data-scroll-to='textBlockQuote']");
                if (anchor) {
                    anchor.scrollIntoView({
                        block: "start",
                        behavior: "smooth"
                    });
                }
            });
        }

        var menu2 = document.getElementById("menu2");
        if (menu2) {
            menu2.addEventListener("click", function() {
                var anchor = document.querySelector("[data-scroll-to='spacer']");
                if (anchor) {
                    anchor.scrollIntoView({
                        block: "start",
                        behavior: "smooth"
                    });
                }
            });
        }

        var menu3 = document.getElementById("menu3");
        if (menu3) {
            menu3.addEventListener("click", function() {
                var anchor = document.querySelector("[data-scroll-to='rekeningField']");
                if (anchor) {
                    anchor.scrollIntoView({
                        block: "start",
                        behavior: "smooth"
                    });
                }
            });
        }

        var menu4 = document.getElementById("menu4");
        if (menu4) {
            menu4.addEventListener("click", function() {
                var anchor = document.querySelector("[data-scroll-to='requestPrayers']");
                if (anchor) {
                    anchor.scrollIntoView({
                        block: "start",
                        behavior: "smooth"
                    });
                }
            });
        }

        var menuContainer = document.getElementById("menuContainer");
        if (menuContainer) {
            menuContainer.addEventListener("click", function() {
                var anchor = document.querySelector("[data-scroll-to='requestPrayers']");
                if (anchor) {
                    anchor.scrollIntoView({
                        block: "start",
                        behavior: "smooth"
                    });
                }
            });
        }

        var floatingButton = document.getElementById("floatingButton");
        if (floatingButton) {
            floatingButton.addEventListener("click", function(e) {
                // Please sync "Home" to the project
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            var playIcon = document.querySelector(".play-icon");
            var pauseIcon = document.querySelector(".pause-1-icon");
            var audio = document.getElementById("myAudio");


            playIcon.addEventListener("click", function() {
                // Mengganti gambar play dengan gambar pause
                playIcon.style.display = "none";
                pauseIcon.style.display = "inline-block";

                // Memutar musik
                audio.play();
            });

            pauseIcon.addEventListener("click", function() {
                // Mengganti gambar pause dengan gambar play
                pauseIcon.style.display = "none";
                playIcon.style.display = "inline-block";

                // Memberhentikan musik
                audio.pause();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Mendapatkan elemen yang akan disalin
            var copyText = document.getElementById("copyText");

            // Mendapatkan tombol yang akan mengaktifkan fungsi penyalinan
            var copyButton = document.getElementById("copyButton");

            // Menambahkan event listener ke tombol
            copyButton.addEventListener("click", function() {
                // Membuat sebuah elemen textarea sementara
                var textarea = document.createElement("textarea");

                // Mengatur isi teks textarea dengan teks yang ingin disalin
                textarea.value = copyText.innerText;

                // Menyembunyikan textarea di luar jendela tampilan
                textarea.style.position = "fixed";
                textarea.style.top = 0;
                textarea.style.left = 0;
                textarea.style.opacity = 0;

                // Menambahkan elemen textarea ke dalam dokumen
                document.body.appendChild(textarea);

                // Memilih teks di dalam textarea
                textarea.select();

                // Menyalin teks ke dalam papan klip
                document.execCommand("copy");

                // Menghapus textarea yang sementara dibuat
                document.body.removeChild(textarea);

                // Memberi tahu pengguna bahwa teks telah disalin
                alert("Teks telah disalin: " + copyText.innerText);
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Mendapatkan elemen yang akan disalin
            var copyText = document.getElementById("copyText2");

            // Mendapatkan tombol yang akan mengaktifkan fungsi penyalinan
            var copyButton = document.getElementById("copyButton2");

            // Menambahkan event listener ke tombol
            copyButton.addEventListener("click", function() {
                // Membuat sebuah elemen textarea sementara
                var textarea = document.createElement("textarea");

                // Mengatur isi teks textarea dengan teks yang ingin disalin
                textarea.value = copyText.innerText;

                // Menyembunyikan textarea di luar jendela tampilan
                textarea.style.position = "fixed";
                textarea.style.top = 0;
                textarea.style.left = 0;
                textarea.style.opacity = 0;

                // Menambahkan elemen textarea ke dalam dokumen
                document.body.appendChild(textarea);

                // Memilih teks di dalam textarea
                textarea.select();

                // Menyalin teks ke dalam papan klip
                document.execCommand("copy");

                // Menghapus textarea yang sementara dibuat
                document.body.removeChild(textarea);

                // Memberi tahu pengguna bahwa teks telah disalin
                alert("Teks telah disalin: " + copyText.innerText);
            });
        });


        // Mendapatkan elemen tombol "Transfer ke no. rekening tertera"
        var transferRekening = document.querySelector('.button20');

        // Mendapatkan elemen tombol "Kirim kado ke alamat tertera"
        var kirimAlamatButton = document.querySelector('.button21');

        // Mendapatkan elemen div "substitute-present"
        var substitutePresent = document.querySelector('.card-list5');

        var button49Text = document.querySelector('.button21 .kirim-kado-ke2');


        // Simpan konten asli dari substitutePresent
        var originalSubstitutePresentContent = substitutePresent.innerHTML;

        // Menambahkan event listener untuk tombol transferRekening
        transferRekening.addEventListener('click', function() {
            // Mengembalikan substitutePresent ke konten aslinya
            substitutePresent.innerHTML = originalSubstitutePresentContent;

            transferRekening.style.backgroundColor = '#3b3b3b';
            transferRekening.style.color = 'white';

            button49Text.style.color = '#3b3b3b';


            kirimAlamatButton.style.backgroundColor = 'white';
            kirimAlamatButton.style.border = '1px solid #3b3b3b;';
            kirimAlamatButton.style.color = 'white';
        });

        // Menambahkan event listener untuk tombol kirimAlamatButton
        kirimAlamatButton.addEventListener('click', function() {
            // Mengubah konten elemen substitutePresent menjadi alamat
            substitutePresent.innerHTML =
                '<div class="alamat"><span class="title">Alamat</span><span class="paragraph">{{ $data->alamat_tertera }}</span></div>';

            kirimAlamatButton.style.backgroundColor = '#3b3b3b';
            kirimAlamatButton.style.color = 'white';

            button49Text.style.color = 'white';


            transferRekening.style.backgroundColor = 'white';
            transferRekening.style.border = '1px solid #3b3b3b';
            transferRekening.style.color = '#3b3b3b';
        });

        var buttons = document.querySelectorAll('.input9 button');

        // Menambahkan event listener untuk setiap tombol
        buttons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                // Mencegah perilaku default tombol (mengarahkan ke halaman baru)
                event.preventDefault();

                // Menambahkan logika lain yang ingin Anda lakukan saat tombol diklik
                // Contoh: Mengubah warna tombol atau menampilkan pesan konfirmasi
            });
        });

        function updateTimer(tgl_akad) {
            future = Date.parse(tgl_akad);
            now = new Date();
            diff = future - now;

            if (diff <= 0) {
                // Waktu telah berlalu, atur semua nilai menjadi 0
                document.getElementById("timer").innerHTML =
                    '<div>00<span>Hari</span></div>' +
                    '<div>00<span>Jam</span></div>' +
                    '<div>00<span>Menit</span></div>' +
                    '<div>00<span>Detik</span></div>';
                return;
            }

            days = Math.floor(diff / (1000 * 60 * 60 * 24));
            hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            secs = Math.floor((diff % (1000 * 60)) / 1000);

            // Format nilai untuk menambahkan angka 0 di depan jika nilainya < 10
            days = (days < 10) ? "0" + days : days;
            hours = (hours < 10) ? "0" + hours : hours;
            mins = (mins < 10) ? "0" + mins : mins;
            secs = (secs < 10) ? "0" + secs : secs;

            document.getElementById("timer")
                .innerHTML =
                '<div>' + days + '<span>Hari</span></div>' +
                '<div>' + hours + '<span>Jam</span></div>' +
                '<div>' + mins + '<span>Menit</span></div>' +
                '<div>' + secs + '<span>Detik</span></div>';
        }

        // Memanggil updateTimer() saat halaman dimuat dengan tanggal akad dari PHP
        updateTimer("{{ $data->tgl_akad }}");
        setInterval(updateTimer.bind(null, "{{ $data->tgl_akad }}"), 1000); // Memperbarui setiap detik
    </script>
</body>

</html>
