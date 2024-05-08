<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <link rel="stylesheet" href="{{ asset('./first-nanang.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rouge Script:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Garamond:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marck Script:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Optima:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Serif Display:wght@400&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=NanumMyeongjo:wght@400;700;800&display=swap" />
</head>

<body style="background-image: url('{{ Storage::url('' . $data->banner_img) }}');">
    <div class="first1">

        {{-- <img class="young-japanese-couple-1-11" alt=""
            src="./assets/youngjapanesecouple-1-1@2x.png" /> --}}


        <div class="first-item"></div>
        <div class="frame-parent119">
            <span class="paragraph">THE WEDDING OF</span>
            <span class="title">Rudi & Arum</span>
            <div class="small-devider"></div>
            <span class="paragraph">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_akad)->locale('id')->isoFormat('D MMMM YYYY') }} </span>
            <a class="primary-button" id="buttonContainer"
                href="{{ route('undangan-alt3-preview', [
                    'nama_mempelai_laki' => $nama_mempelai_laki,
                    'nama_mempelai_perempuan' => $nama_mempelai_perempuan,
                    // 'nama_undangan' => $nama_undangan // Pastikan $nama_undangan telah diberikan nilai sebelumnya
                ]) }}">Buka
                Undangan</a>

        </div>
    </div>


</body>

</html>
