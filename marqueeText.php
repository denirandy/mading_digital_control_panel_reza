<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/marqueeText.css">
</head>

<body>
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

    <div class="body-container">
        <h2>MARQUEE TEXT</h2>
        <div class="content-container"></div>
        <div class="content-preview">
            <div>
                <h3>1 Ini adalah preview dari marquee text</h3>
            </div>
        </div>
        <div class="input-container">
            <input class="input-content" type="text">
            <button class="btn-tambah">Tambah</button>
        </div>
    </div>

    <script src="js/qrSetting.js"></script>
</body>

</html>