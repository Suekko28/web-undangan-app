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
        <section class="banner" data-scroll-to="youngJapaneseCouple1Image">
            {{-- <img class="young-japanese-couple-1-icon1" alt=""
                src="{{ asset('./assets/BannerImage.jpg') }}" data-scroll-to="youngJapaneseCouple1Image" /> --}}

            <div class="card4">
                <div class="quotes">
                    <span class="title">“Pertemuan yang kuimpikan Kini jadi kenyataan Pertemuan yang kudambakan
                        Ternyata bukan khayalan”</span>
                    <span class="paragraph">Rhoma Irama</span>
                </div>
                <div class="wedding-timer">
                    <div id="timer"></div>
                    <div class="wedding-date-info">
                        <span class="paragraph">Kamis, 21 Oktober 2024</span>
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
                <div class="foto-mempelai-pria"></div>
                <div class="info-mempelai-pria">
                    <div class="detail">
                        <span class="label">THE GROOM</span>
                        <span class="title">Rudi Wibowo</span>
                        <span class="paragraph">Bapak Akbar S.kom dan Ibu Siti maimunah dari jakarta, Indonesia</span>
                    </div>
                    <a target="_blank" class="button-link" href="https://www.instagram.com/" target="_blank"
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
                        RWibowo
                    </a>
                </div>
            </div>
            <div class="mempelai-wanita">
                <div class="info-mempelai-wanita">
                    <div class="detail">
                        <span class="label">THE BRIDGE</span>
                        <span class="title">Arum Kurniawati</span>
                        <span class="paragraph">Bapak Akbar S.kom dan Ibu Siti maimunah dari jakarta, Indonesia</span>
                    </div>
                    <a target="_blank" class="button-link" href="https://www.instagram.com/" target="_blank"
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
                        Arum46
                    </a>
                </div>
                <div class="foto-mempelai-wanita"></div>
            </div>
        </section>

        <section class="our-love-story-parent">
            <span class="paragraph">OUR LOVE STORY</span>
            <div class="timeline-container">
                <div class="timeline">
                    <div class="container left">
                        <div class="content">
                            <!-- <div class="foto-story-1"></div> -->
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
                    </div>
                    <div class="container left">
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
                    </div>
                    <div class="container left">
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
                    </div>
                </div>
                <!-- <div class="card-list3">
                    <div class="card6">
                        <img class="visual-icon2" loading="eager" alt=""
                            src="{{ asset('./assets/visual-2@2x.png') }}" />

                        <div class="card-inner">
                            <div class="frame-parent44">
                                <div class="jan-01-2019-parent">
                                    <b class="jan-01-2019">JAN 01, 2019</b>
                                    <div class="pertama-bertemu">Pertama Bertemu</div>
                                </div>
                                <b class="kita-bertemu-pertama">Kita bertemu pertama kali di sma kelas 1</b>
                            </div>
                        </div>
                    </div>
                    <div class="card7">
                        <img class="visual-icon3" loading="eager" alt=""
                            src="{{ asset('./assets/visual-3@2x.png') }}" />

                        <div class="card-child">
                            <div class="frame-parent45">
                                <div class="jan-01-2019-group">
                                    <b class="jan-01-20191">Jan 01, 2019</b>
                                    <div class="pertama-bertemu1">Pertama Bertemu</div>
                                </div>
                                <b class="kita-bertemu-pertama1">Kita bertemu pertama kali di sma kelas 1</b>
                            </div>
                        </div>
                    </div>
                    <div class="card8">
                        <img class="visual-icon4" loading="eager" alt=""
                            src="{{ asset('./assets/visual-4@2x.png') }}" />

                        <div class="text-block">
                            <div class="rectangle">
                                <div class="icon3">
                                    <b class="des-01-2019">DES 01, 2019</b>
                                    <div class="tunangan">Tunangan</div>
                                </div>
                                <div class="kita-bertemu-pertama2">
                                    Kita bertemu pertama kali di sma kelas 1
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content">
                    <div class="container1">
                        <div class="dot"></div>
                    </div>
                    <div class="progress"></div>
                    <div class="container2">
                        <div class="dot1"></div>
                    </div>
                    <div class="progress1"></div>
                    <div class="container3">
                        <div class="dot2"></div>
                    </div>
                </div>
                <div class="card-list4">
                    <div class="card9">
                        <img class="visual-icon5" loading="eager" alt=""
                            src="{{ asset('./assets/visual-5@2x.png') }}" />

                        <div class="card-inner1">
                            <div class="frame-parent46">
                                <div class="jan-01-2019-container">
                                    <b class="jan-01-20192">Jan 01, 2019</b>
                                    <div class="pertama-bertemu2">Pertama Bertemu</div>
                                </div>
                                <b class="kita-bertemu-pertama3">Kita bertemu pertama kali di sma kelas 1</b>
                            </div>
                        </div>
                    </div>
                    <div class="card10">
                        <img class="visual-icon6" loading="eager" alt=""
                            src="{{ asset('./assets/visual-6@2x.png') }}" />

                        <div class="card-inner2">
                            <div class="frame-parent47">
                                <div class="mar-20-2019-parent">
                                    <b class="mar-20-2019">MAR 20, 2019</b>
                                    <div class="jadian">Jadian</div>
                                </div>
                                <div class="kita-bertemu-pertama4">
                                    Kita bertemu pertama kali di sma kelas 1
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card11">
                        <img class="visual-icon7" loading="eager" alt=""
                            src="{{ asset('./assets/visual-7@2x.png') }}" />

                        <div class="card-inner3">
                            <div class="frame-parent48">
                                <div class="jan-01-2019-parent1">
                                    <b class="jan-01-20193">Jan 01, 2019</b>
                                    <div class="pertama-bertemu3">Pertama Bertemu</div>
                                </div>
                                <b class="kita-bertemu-pertama5">Kita bertemu pertama kali di sma kelas 1</b>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>


        <section class="spacer" data-scroll-to="spacer">
            <span class="paragraph">OUR MOMENT</span>
            <div class="rectangle-path">
                <div class="column">
                    <span class="title">
                        “Pertemuan yang kuimpikan Kini jadi kenyataan Pertemuan yang kudambakan Ternyata bukan khayalan”
                    </span>
                    <span class="paragraph">Rhoma Irama<span>
                </div>
                <div class="frame-video">
                    <video autoplay muted loop controls src="{{ asset('./assets/video.mp4') }}"></video>
                </div>
            </div>
            <div class="scroll">
                <ul>
                    <li> <img class="foto-ganjil" src="{{ asset('./assets/foto-1@2x.png') }}" alt=""> </li>
                    <li> <img class="foto-genep" src="{{ asset('./assets/foto-2@2x.png') }}" alt=""> </li>
                    <li> <img class="foto-ganjil" class="foto-ganjil" src="{{ asset('./assets/foto@2x.png') }}"
                            alt=""> </li>
                    <li> <img class="foto-genep" src="{{ asset('./assets/foto-3@2x.png') }}" alt=""> </li>
                    <li> <img class="foto-ganjil" src="{{ asset('./assets/foto-4@2x.png') }}" alt=""> </li>
                </ul>
            </div>
        </section>


        <section class="wedding-date-address" data-scroll-to="rekeningField">
            <div class="photo-mix">
                <div class="foto-depan"></div>
                <div class="foto-belakang"></div>
            </div>
            <div class="resepsi-akad">
                <div class="info-akad">
                    <span class="title">Akad Nikah</span>
                    <div class="detail-waktu">
                        <span class="paragpraph">JUMAT, 28 APRIL 2023</span>
                        <span class="paragraph">PUKUL 09:00 WIB - SELESAI</span>
                    </div>
                    <span class="paragraph">Plataran Menteng, Jalan HOS. Cokroaminoto, RT.6/RW.4,
                        Gondangdia, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta,
                        Indonesia
                    </span>
                </div>
                <div class="devider5"></div>
                <div class="info-resepsi">
                    <span class="title">Akad Nikah</span>
                    <div class="detail-waktu">
                        <span class="paragpraph">JUMAT, 28 APRIL 2023</span>
                        <span class="paragraph">PUKUL 09:00 WIB - SELESAI</span>
                    </div>
                    <span class="paragraph">Plataran Menteng, Jalan HOS. Cokroaminoto, RT.6/RW.4,
                        Gondangdia, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta,
                        Indonesia
                    </span>
                </div>
                <a target="_blank" class="outline-button" href="https://www.google.com/maps">
                    Lihat Lokasi
                </a>
            </div>

            {{-- <div class="frame-parent50">
                <form class="frame-form">
                    <div class="frame-parent51">
                        <div class="the-groom-group">
                            <b class="the-groom3">THE GROOM</b>
                            <div class="konfirmasi-kehadiran">Konfirmasi Kehadiran</div>
                            <b class="silahkan-isi-form">Silahkan isi form kehadiran, ya!</b>
                        </div>
                        <div class="row-input1">
                            <div class="input8">
                                <div class="nama">Nama</div>
                                <div class="field4">
                                    <input class="masukkan-nama-kamu2" placeholder="Masukkan nama kamu"
                                        type="text" />
                                </div>
                            </div>
                            <div class="input9">
                                <div class="apakah-kamu-akan">Apakah kamu akan hadir?</div>
                                <button class="field5" href="#">Ya, saya akan hadir</button>
                                <button class="field6">Tidak, saya tidak bisa hadir</button>
                            </div>
                        </div>
                    </div>
                    <button class="button19">
                        <div class="mail7">
                            <img class="vector-icon8" alt="" src="{{ asset('./assets/vector.svg') }}" />
                            <div class="badge9">
                                <div class="div18">12</div>
                            </div>
                        </div>
                        <b class="kirim">Kirim</b>
                        <img class="add-icon7" alt="" src="{{ asset('./assets/add.svg') }}" />
                    </button>
                </form>
                <img class="foto-icon7" loading="eager" alt=""
                    src="{{ asset('./assets/foto-7@2x.png') }}" />
            </div> --}}

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
                    <div class="card12">
                        <span class="title">BCA</span>
                        <div class="body5">
                            <b class="b20" id="copyText">1223242442</b>
                            <img class="copy" alt="" id="copyButton"
                                src="{{ asset('./assets/copy.svg') }}" />
                        </div>
                        <div class="an-rudi-hermina4">an Rudi Hermina</div>
                    </div>
                    <div class="card13">
                        <span class="title">Mandiri</span>
                        <div class="body6">
                            <b class="b21" id="copyText2">1223242442</b>
                            <img class="copy2" alt="" id="copyButton2"
                                src="{{ asset('./assets/copy.svg') }}" />
                        </div>
                        <div class="an-rudi-hermina5">an Rudi Hermina</div>
                    </div>
                    
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
                <div class="button-kirim">
                    @foreach ($data as $item)
                        <div class="frame-parent55">
                            <div class="hari-parent">
                                <div class="title2">{{ $item->nama }}</div>
                                <b class="label">{{ $item->alamat }}</b>
                            </div>
                            <div class="paragraph2">{{ $item->ucapan }}</div>
                        </div>
                    @endforeach


                </div>
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
                '<div class="alamat"><span class="title">Alamat</span><span class="paragraph">Kedung Waringin, Kecamatan Bojonggede, Kabupaten Bogor, Jawa Barat 16923</span></div>';

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

        function updateTimer() {
            future = Date.parse("June 11, 2024 11:30:00");
            now = new Date();
            diff = future - now;

            days = Math.floor(diff / (1000 * 60 * 60 * 24));
            hours = Math.floor(diff / (1000 * 60 * 60));
            mins = Math.floor(diff / (1000 * 60));
            secs = Math.floor(diff / 1000);

            d = days;
            h = hours - days * 24;
            m = mins - hours * 60;
            s = secs - mins * 60;

            document.getElementById("timer")
                .innerHTML =
                '<div>' + d + '<span>Hari</span></div>' +
                '<div>' + h + '<span>Jam</span></div>' +
                '<div>' + m + '<span>Menit</span></div>' +
                '<div>' + s + '<span>Detik</span></div>';
        }
        setInterval('updateTimer()', 1000);
    </script>
</body>

</html>
