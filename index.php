<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta HTTP-EQUIV="Expires" CONTENT="-1">
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
    <link rel="stylesheet" href="css/salaprove.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/corsi.css">
    <link rel="stylesheet" href="css/docente.css">
    <link rel="stylesheet" href="css/contatti.css">

    <!-- 
        jquery
     -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- 
        Transitions JS
     -->
    <script src="js/transitions.js"></script>

    <!-- 
        Footer social icons
     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 
        Google font
     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- 
        Google Icons
    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- 
        Swiper JS
     -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<div class="body-wrapper">

    <body>

        <!-- 
            transition screen
        -->
        <!-- <div class="page-transition transition1 is-active">
            <div id="content">
                <img src="img/header/logo.webp" id="loading-logo" alt="">
                <img src="img/loadingScreen/loading_ring.gif" width="64px">
                <h1 style="color: white; margin-top: 50px; font-size: large" id="loading-text"></h1>
            </div>
        </div> -->

        <?php

        include("php/header.php");

        ?>

        <div id="header-separator" style="background-color: transparent"></div>

        <?php
        $allowed = [
            "corsi",
            "salaprove",
            "docente",
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

        <script type="text/javascript">
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

            // Change the separator height according to the header height when the page is loaded or resized
            // to prevent hiding other elements, since the header is set to position: fixed
            $(window).ready(function() {
                resizeHeaderDivider();
            });

            function resizeHeaderDivider() {
                var headerHeight = document.getElementById('header').offsetHeight;
                document.getElementById('header-separator').style.height = (headerHeight) + "px";
            }
        </script>
    </body>
</div>

</html>