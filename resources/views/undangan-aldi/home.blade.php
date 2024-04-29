<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="{{ asset('global.css') }}" />
    <link rel="stylesheet" href="{{ asset('index.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rouge Script:wght@400&display=swap" />
</head>

<body>
    <div class="prototype-home-deks">
        {{-- <img class="asset-4-icon" alt="" src="./assets/asset-4@2x.png" />

      <img class="asset-3-1" alt="" src="./assets/asset-3-1@2x.png" />

      <img class="asset-2-11" alt="" src="./assets/asset-2-11@2x.png" />

      <img class="asset-4-3" alt="" src="./assets/asset-4-3@2x.png" /> --}}
            <div class="frame-parent">
                <div class="undangan-pernikahan-parent">
                    <div class="undangan-pernikahan">Undangan Pernikahan</div>
                    <div class="jamaludin-maryam">{{ $data->nama_mempelai_laki }} & {{ $data->nama_mempelai_perempuan }}
                    </div>
                    <b
                        class="undangan-pernikahan">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_akad)->format('d-m-Y') }}</b>
                </div>
                <div class="ellipse-parent">
                    <img class="frame-child" alt=""src="{{ Storage::url('' . $data->banner_img) }}" />

                    <img class="asset-1-4" alt="" src="{{ asset('assets/asset-1-4@2x.png') }}" />


                </div>
                <div class="frame-group">
                    <div class="yth-bapakibusaudarai-parent">
                        <div class="undangan-pernikahan">Yth Bapak/Ibu/Saudara/I</div>
                        <b class="undangan-pernikahan">{{ $nama_undangan }}</b>
                    </div>
                    <div class="buka-undangan-wrapper">
                        <a class="undangan-pernikahan" style="color: white; text-decoration:none;"
                            href="{{ route('undangan-alt1-index', [
                                'nama_mempelai_laki' => $nama_mempelai_laki,
                                'nama_mempelai_perempuan' => $nama_mempelai_perempuan,
                                'nama_undangan' => $nama_undangan // Pastikan $nama_undangan telah diberikan nilai sebelumnya
                            ]) }}">Buka Undangan</a>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
    </div>

</body>

</html>
