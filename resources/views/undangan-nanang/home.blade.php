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

<body>
    <div class="first1">
    
        {{-- <img class="young-japanese-couple-1-11" alt=""
            src="./assets/youngjapanesecouple-1-1@2x.png" /> --}}


        <div class="first-item"></div>
        <div class="frame-parent119">
            <span class="paragraph">THE WEDDING OF</span>
            <span class="title">Rudi & Arum</span>
            <div class="small-devider"></div>
            <span class="paragraph">21 Oktober 2024</span>
            <button target="_blank" class="primary-button" id="buttonContainer">Buka Undangan</button>

        </div>
    </div>

    <script>
        var buttonContainer = document.getElementById("buttonContainer");
        if (buttonContainer) {
            buttonContainer.addEventListener("click", function(e) {
                window.location.href = "./undangan-alt3/index";
            });
        }
    </script>
</body>

</html>
