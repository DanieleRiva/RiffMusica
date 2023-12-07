<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riff Musica - Header</title>
</head>

<body>
    <header id="header">

        <div class="topbar" id="topbar">
            <a id="home-btn" href="index.php"><img id="topbarIcon" src="img/header/logo.webp" alt="" srcset=""></a>

            <div class="horizontal-navbar">
                <ul class="nav">
                    <li <?php if (!isset($_GET["page"])) { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="index.php" <?php if (isset($_GET["page"]) && $_GET["page"] != "home") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-home px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/home.png" alt="" width="32px">
                            Home
                        </a>
                    </li>
                    <li <?php if ((isset($_GET["page"]) && $_GET["page"] == "corsi") || isset($_GET["docente"])) { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=corsi" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "corsi" && $_GET["page"] != "docente") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-corsi px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/corsi.png" alt="" width="32px">
                            Corsi
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "salaprove") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=salaprove" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "salaprove") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-salaprove px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/salaprove.png" alt="" width="32px">
                            Sala Prove
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "media") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=media" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "media") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-media px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/media.png" alt="" width="32px">
                            Media
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "contatti") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=contatti" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "contatti") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-contatti px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/contatti.png" alt="" width="32px">
                            Contatti
                        </a>
                    </li>
                </ul>
            </div>

            <a id="hamburger-btn-a" onclick="hamburgerButton()">
                <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
            </a>
        </div>

        <div class="menu-wrapper inactive">

            <!-- <div class="backdrop" onclick="hamburgerButton()"></div> -->

            <div class="side-menu">
                <img id="side-menu-logo" src="img/header/logo.webp" alt="">

                <ul class="nav">
                    <li <?php if (!isset($_GET["page"])) { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="index.php" <?php if (isset($_GET["page"]) && $_GET["page"] != "home") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-home px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/home.png" alt="" width="32px">
                            Home
                        </a>
                    </li>
                    <li <?php if ((isset($_GET["page"]) && $_GET["page"] == "corsi") || isset($_GET["docente"])) { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=corsi" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "corsi" && $_GET["page"] != "docente") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-corsi px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/corsi.png" alt="" width="32px">
                            Corsi
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "salaprove") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=salaprove" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "salaprove") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-salaprove px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/salaprove.png" alt="" width="32px">
                            Sala Prove
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "media") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=media" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "media") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-media px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/media.png" alt="" width="32px">
                            Media
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "contatti") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=contatti" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "contatti") { ?> id="a-header" <?php } ?> class="icon-animate nav-link nav-link-contatti px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/contatti.png" alt="" width="32px">
                            Contatti
                        </a>
                    </li>
                </ul>



                <div class="socials" data-aos="slide-down">

                    <a href="https://www.youtube.com/channel/UCWnCmpXYSeja13ZZdfLoPPA/featured" class="social-icon social-icon--youtube" target="_blank">
                        <i class="fa fa-youtube"></i>
                        <div class="tooltip">YouTube</div>
                    </a>

                    <a href="https://www.instagram.com/riff_associazione_musicale/" class="social-icon social-icon--instagram" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <div class="tooltip">Instagram</div>
                    </a>

                    <a href="https://www.facebook.com/riffcassago" class="social-icon social-icon--facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                        <div class="tooltip">Facebook</div>
                    </a>

                </div>
            </div>

        </div>

        <!-- <img src="img/header/logo.webp" id="logo" alt="">

        <ul class="nav">
            <li <?php if (!isset($_GET["page"])) { ?> id="current-page" <?php } ?>>
                <a href="index.php" <?php if (isset($_GET["page"]) && $_GET["page"] != "home") { ?> id="a-header" <?php } ?> class="nav-link nav-link-home px-2 transition-a">
                    <img id="header-icon" src="img/header/icons/static/home.png" alt="" width="32px">
                    Home
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "corsi") { ?> id="current-page" <?php } ?>>
                <a href="?page=corsi" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "corsi") { ?> id="a-header" <?php } ?> class="nav-link nav-link-corsi px-2 transition-a">
                    <img id="header-icon" src="img/header/icons/static/corsi.png" alt="" width="32px">
                    Corsi
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "docenti") { ?> id="current-page" <?php } ?>>
                <a href="?page=docenti" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "docenti") { ?> id="a-header" <?php } ?> class="nav-link nav-link-docenti px-2 transition-a">
                    <img id="header-icon" src="img/header/icons/static/docenti.png" alt="" width="32px">
                    Docenti
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "media") { ?> id="current-page" <?php } ?>>
                <a href="?page=media" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "media") { ?> id="a-header" <?php } ?> class="nav-link nav-link-media px-2 transition-a">
                    <img id="header-icon" src="img/header/icons/static/media.png" alt="" width="32px">
                    Media
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "contatti") { ?> id="current-page" <?php } ?>>
                <a href="?page=contatti" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "contatti") { ?> id="a-header" <?php } ?> class="nav-link nav-link-contatti px-2 transition-a">
                    <img id="header-icon" src="img/header/icons/static/contatti.png" alt="" width="32px">
                    Contatti
                </a>
            </li>
        </ul> -->

    </header>

    <script>
        const menu = document.getElementsByClassName("menu-wrapper")[0];
        const hamburgerBtn = document.getElementById("hamburger-btn");
        const topbarLogo = document.getElementById("topbarIcon");

        function hamburgerButton() {
            menu.classList.toggle("active");
            hamburgerBtn.classList.toggle("active");

            if (hamburgerBtn.textContent.trim() == "menu") {
                hamburgerBtn.textContent = "close";
                document.body.style.touchAction = "none";
                // document.body.style.position = "fixed";

                topbarLogo.style.visibility = "hidden";
                menu.classList.add("active");
                menu.classList.remove("inactive");
            } else {
                hamburgerBtn.textContent = "menu";
                document.body.style.touchAction = "auto";
                // document.body.style.position = "unset";

                topbarLogo.style.visibility = "visible";
                menu.classList.add("inactive");
                menu.classList.remove("active");
            }
        }

        // Header icons animations controller
        $(".icon-animate").hover(function() {
            if ($(this).hasClass("nav-link-home"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/home.gif");
            if ($(this).hasClass("nav-link-corsi"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/corsi.gif");
            if ($(this).hasClass("nav-link-salaprove"))
                $(this).children("#header-icon").attr("src", "img/header/icons/animated/salaprove.gif");
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
            if ($(this).hasClass("nav-link-salaprove"))
                $(this).children("#header-icon").attr("src", "img/header/icons/static/salaprove.png");
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
    </script>
</body>

</html>