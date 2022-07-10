<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsi</title>
</head>

<body>

    <?php
    if (isset($_GET["page"]) && $_GET["page"] = "corsi") { ?>

        <div class="corsi-container">
            <div class="card js-tilt" data-tilt>
                <img class="card-img-top" src="img/corsi/chitarra/chitarra_cover.gif" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-text">Chitarra</h1>
                </div>
            </div>

            <div class="card js-tilt" data-tilt>
                <img class="card-img-top" src="img/corsi/chitarra/chitarra_cover.gif" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-text">Chitarra</h1>
                </div>
            </div>

            <div class="card js-tilt" data-tilt>
                <img class="card-img-top" src="img/corsi/chitarra/chitarra_cover.gif" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-text">Chitarra</h1>
                </div>
            </div>

            <div class="card js-tilt" data-tilt>
                <img class="card-img-top" src="img/corsi/chitarra/chitarra_cover.gif" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-text">Chitarra</h1>
                </div>
            </div>

            <div class="card js-tilt" data-tilt>
                <img class="card-img-top" src="img/corsi/chitarra/chitarra_cover.gif" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-text">Chitarra</h1>
                </div>
            </div>
        </div>

    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "chitarra") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "basso") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "canto") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "piano") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "batteria") {  ?>

    <?php } ?>

</body>

</html>