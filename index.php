<?php

require("php/utils/db_connect.php");
$conn = Connection::Connect("localhost", "root", "", "RiffMusica");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/header/logo.png">
    <title>Riff Musica</title>

    <!-- CSSs -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Transitions JS -->
    <script src="js/transitions.js"></script>
</head>

<body>
    <!-- transition screen  -->
    <div class="page-transition transition1 is-active">
        <div id="a">
            <div id="b">
                <div id="content">
                    <img src="img/header/logo.webp" id="loading-logo" alt="">
                    <img src="img/loadingScreen/loading_ring.gif" width="64px">
                    <h1 style="color: white; margin-top: 50px; font-size: large" id="loading-text"></h1>
                </div>
            </div>
        </div>

    </div>

    <?php

    include("php/header.php");

    ?>

    <div id="header-separator" style="background-color: transparent"></div>

    <?php
    $allowed = [
        "home",
        "corsi",
        "docenti",
        "media",
        "contatti"
    ];

    $page = isset($_GET["page"]) ? $_GET["page"] : "home";

    if (in_array($page, $allowed))
        include("php/{$page}.php");

    ?>

    <div style="height: 1000px;"></div>

    <?php

    include("php/footer.php");
    mysqli_close($conn);

    ?>

    <script type="text/javascript">
        function clickEffect(e) {
            var d = document.createElement("div");

            d.className = "clickEffect";
            d.style.top = e.clientY + "px";
            d.style.left = e.clientX + "px";
            document.body.appendChild(d);

            d.addEventListener('animationend', function() {
                d.parentElement.removeChild(d);
            }.bind(this));
        }

        document.addEventListener('click', clickEffect);

        // Header icons animations controller
        $(".nav-link").hover(function() {
            if ($(this).hasClass("nav-link-home"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/home.gif");
            if ($(this).hasClass("nav-link-corsi"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/corsi.gif");
            if ($(this).hasClass("nav-link-docenti"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/docenti.gif");
            if ($(this).hasClass("nav-link-media"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/media.gif");
            if ($(this).hasClass("nav-link-contatti"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/contatti.gif");
        }, function() {
            if ($(this).hasClass("nav-link-home"))
                $(this).children("#header-icon").attr("src", "img/header/icons/static/home.png");
            if ($(this).hasClass("nav-link-corsi"))
                $(this).children("#header-icon").attr("src", "img/header/icons/static/corsi.png");
            if ($(this).hasClass("nav-link-tour"))
                $(this).children("#header-icon").removeClass("bx-tad");
            if ($(this).hasClass("nav-link-docenti"))
                $(this).children("#header-icon").attr("src", "img/header/icons/static/docenti.png");
            if ($(this).hasClass("nav-link-media"))
                $(this).children("#header-icon").attr("src", "img/header/icons/static/media.png");
            if ($(this).hasClass("nav-link-contatti"))
                $(this).children("#header-icon").attr("src", "img/header/icons/static/contatti.png");
        });

        // Add the on scroll effect to the header when scrolling
        window.onscroll = function() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                $("#header").addClass("header-onscroll");
                $("#logo").attr("id", "logo-onscroll");
            } else {
                $("#header").removeClass("header-onscroll");
                $("#logo-onscroll").attr("id", "logo");
            }
        };
    </script>
</body>

</html>