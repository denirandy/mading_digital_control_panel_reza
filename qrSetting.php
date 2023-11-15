



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel Digital Boarding</title>
    <link rel="stylesheet" href="css/qrSetting.css">
</head>

<body class="bg">

    <div class="sideBar-container">
        <img class="icon-ict" src="resources/icon/icon_ict.png" alt="">
        <div class="layar-abuabu"></div>
        <div id="layar-merah" class="layar-merah"></div>
        <div class="icon-container">
            <img onclick="changcePotitionLayarMerah(1)" class="icon" src="resources/icon/sidebar_qr_code_icon 1.png"
                alt="">
            <img onclick="changcePotitionLayarMerah(2)" class="icon" src="resources/icon/sidebar_marquee_text_icon.png"
                alt="">
            <img onclick="changcePotitionLayarMerah(3)" class="icon" src="resources/icon/sidebar_video_icon.png" alt="">
            <img onclick="changcePotitionLayarMerah(4)" class="icon" src="resources/icon/sidebar_jadwal_icon.png"
                alt="">
        </div>
    </div>
    <div class="qr">
        <img class="gambar-qr" src="resources/gambar/qr 1.png" alt="">
        <p class="text-qr">SMK PGRI PEKANBARU</p>
        <button class="submit">
            <p class="text-button">Gunakan</p>
        </button>
    </div>

    <div class="qr">
        <div class="gambar-qr" id="qrimage"></div>
    </div>

   
    <div class="addqr">
        <img class="addqr-popup" id="addqr" src="resources/icon/add.png" alt="">
    </div>


    <div id="popup" class="popup-container">
        <div class="popup-content">
            <input type="text" name="qr-input" id="qrinput" value="" />
            <button onclick="buatQrcode()" id="add-btn" class="add-btn">Generate</button>





            <button class="close-btn" onclick="closePopup()">Batal</button>
        </div>
    </div>
    <script src="library/qrcode.min.js"></script>
    <script src="js/qrSetting.js"></script>
</body>

</html>