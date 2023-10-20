<?php

// require("php/utils/db_connect.php");
// $conn = Connection::Connect("localhost", "root", "", "RiffMusica");
// mysqli_set_charset($conn, "utf8mb4");

// session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="img/header/logo.png">
    <title>Riff Musica</title>

    <!-- 
        CSSs
     -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/corsi.css">
    <link rel="stylesheet" href="css/docenti.css">

    <!-- 
        jquery
     -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- 
        Transitions JS
     -->
    <script src="js/transitions.js"></script>

    <!-- 
        Magnify JS
     -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/js/jquery.magnify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.min.css">

    <!-- 
        Footer social icons
     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 
        SweetAlert
     -->
    <!-- <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css"> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- 
        Google font
     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- 
        transition screen
      -->
    <div class="page-transition transition1 is-active">
        <div id="content">
            <img src="img/header/logo.webp" id="loading-logo" alt="">
            <img src="img/loadingScreen/loading_ring_old.gif" width="64px">
            <h1 style="color: white; margin-top: 50px; font-size: large" id="loading-text"></h1>
        </div>
    </div>

    <?php

    include("php/header.php");

    ?>

    <div id="header-separator" style="background-color: transparent"></div>

    <?php
    $allowed = [
        "corsi",
        "docenti",
        "media",
        "contatti",
        "registro"
    ];

    $page = isset($_GET["page"]) ? $_GET["page"] : "index";

    if (in_array($page, $allowed))
        include("php/{$page}.php");
    else
        include('php/home.php');

    ?>

    <!-- <div style="height: 1000px;"></div> -->

    <?php

    include("php/footer.php");
    // mysqli_close($conn);

    ?>

    <!-- 
        TiltJS
     -->
    <script src="js/tilt.jquery.min.js">
        // TiltJS
        $('.js-tilt').tilt({
            maxTilt: 10,
            perspective: 1000, // Transform perspective, the lower the more extreme the tilt gets.
            easing: "cubic-bezier(.03,.98,.52,.99)", // Easing on enter/exit.
            scale: 1.5, // 2 = 200%, 1.5 = 150%, etc..
            speed: 300, // Speed of the enter/exit transition.
            transition: true, // Set a transition on enter/exit.
            disableAxis: null, // What axis should be disabled. Can be X or Y.
            reset: true, // If the tilt effect has to be reset on exit.
            glare: true, // Enables glare effect
            maxGlare: 1 // From 0 - 1.
        })
    </script>

    <script type="text/javascript">
        // Ripple effect on mouse click
        // function clickEffect(e) {
        //     var d = document.createElement("div");

        //     d.className = "clickEffect";
        //     d.style.top = e.clientY + "px";
        //     d.style.left = e.clientX + "px";
        //     document.body.appendChild(d);

        //     d.addEventListener('animationend', function() {
        //         d.parentElement.removeChild(d);
        //     }.bind(this));
        // }

        // document.addEventListener('click', clickEffect);

        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
                document.getElementById("topbar").classList.add("onscroll");
            } else {
                document.getElementById("topbar").classList.remove("onscroll");
            }
        }

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
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                $("#header").addClass("header-onscroll");
                $("#topbar").addClass("onscroll");
                $("#logo").attr("id", "logo-onscroll");
            } else {
                $("#header").removeClass("header-onscroll");
                $("#topbar").removeClass("onscroll");
                $("#logo-onscroll").attr("id", "logo");
            }
        };

        // Change the separator height according to the header height when the page is loaded or resized
        // to prevent hiding other elements, since the header is set to position: fixed
        $(window).ready(function() {
            resizeHeaderDivider();
        });

        $(window).resize(function() {
            resizeHeaderDivider();
        });

        function resizeHeaderDivider() {
            var headerHeight = document.getElementById('header').offsetHeight;
            document.getElementById('header-separator').style.height = (headerHeight) + "px";
        }

        // Magnify JS
        $(document).ready(function() {
            $('.zoom').magnify({
                speed: 200,
                magnifiedWidth: 700,
                magnifiedHeight: 700
            });
        });
    </script>
</body>

</html>