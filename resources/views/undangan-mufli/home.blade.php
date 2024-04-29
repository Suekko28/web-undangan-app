<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <link rel="stylesheet" href="{{ asset('./coba.css') }}" />
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&display=swap" />
</head>

<body>

    <main>
        <div class="container">
            <div class="content">
                <div class="kepada-bapak-ibu-content">Kepada Bapak/Ibu/Saudara/i</div>
                <div class="yang-diundang">Mufli & Keluarga</div>
                <div class="kami-dengan-senang">
                    Kami dengan senang hati mengundang Anda untuk menghadiri hari pernikahan
                    kami
                </div>
                <div class="alexnor-exafator">Alexnor & Exafator</div>
                <button  class="Secondary-button" href="undangan-alt2/index" id="button">
                    Buka Undangan
                    <!-- <a class="buka-undangan4" style="text-decoration: none" href="undangan-alt3/index">Buka Undangan</a> -->
                </button>
            </div>
        </div>
    </main>
    <script>
        var button = document.getElementById("button");
        if (button) {
            button.addEventListener("click", function(e) {
                window.location.href = "./undangan-alt2/index";
                // Please sync "Home" to the project
            });
        }
    </script>
</body>

</html>
