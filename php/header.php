<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riff Musica - Header</title>
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
        <img src="img/header/logo.webp" id="logo" alt="">

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "home") { ?> id="current-page" <?php } ?>>
                <a href="?page=home" class="nav-link px-2">
                    Home
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "corsi") { ?> id="current-page" <?php } ?>>
                <a href="?page=corsi" id="a-header" class="nav-link px-2">
                    Corsi
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "docenti") { ?> id="current-page" <?php } ?>>
                <a href="?page=docenti" id="a-header" class="nav-link px-2">
                    Docenti
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "media") { ?> id="current-page" <?php } ?>>
                <a href="?page=media" id="a-header" class="nav-link px-2">
                    Media
                </a>
            </li>
            <li <?php if (isset($_GET["page"]) && $_GET["page"] == "contatti") { ?> id="current-page" <?php } ?>>
                <a href="?page=contatti" id="a-header" class="nav-link px-2">
                    Contatti
                </a>
            </li>
        </ul>
    </header>
</body>

</html>