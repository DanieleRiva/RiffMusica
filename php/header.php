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

        <div class="topbar">
            <h1>Riff Musica</h1>

            <a onclick="hamburgerButton()">
                <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
            </a>
        </div>

        <div class="menu-wrapper">

            <div class="backdrop" onclick="hamburgerButton()"></div>

            <div class="side-menu">
                <img id="side-menu-logo" src="img/header/logo.webp" alt="">

                <ul class="nav">
                    <li <?php if (!isset($_GET["page"])) { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="index.php" <?php if (isset($_GET["page"]) && $_GET["page"] != "home") { ?> id="a-header" <?php } ?> class="nav-link nav-link-home px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/home.png" alt="" width="32px">
                            Home
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "corsi") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=corsi" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "corsi") { ?> id="a-header" <?php } ?> class="nav-link nav-link-corsi px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/corsi.png" alt="" width="32px">
                            Corsi
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "media") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=media" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "media") { ?> id="a-header" <?php } ?> class="nav-link nav-link-media px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/media.png" alt="" width="32px">
                            Media
                        </a>
                    </li>
                    <li <?php if (isset($_GET["page"]) && $_GET["page"] == "contatti") { ?> id="current-page" <?php } ?> onclick="hamburgerButton()">
                        <a href="?page=contatti" <?php if (!isset($_GET["page"]) || isset($_GET["page"]) && $_GET["page"] != "contatti") { ?> id="a-header" <?php } ?> class="nav-link nav-link-contatti px-2 transition-a">
                            <img id="header-icon" src="img/header/icons/static/contatti.png" alt="" width="32px">
                            Contatti
                        </a>
                    </li>
                </ul>
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

        function hamburgerButton() {
            menu.classList.toggle("active");
            hamburgerBtn.classList.toggle("active");

            if (hamburgerBtn.textContent.trim() == "menu") {
                hamburgerBtn.textContent = "close";
                document.body.style.position = "fixed";
            } else {
                hamburgerBtn.textContent = "menu";
                document.body.style.position = "unset";
            }
        }
    </script>
</body>

</html>