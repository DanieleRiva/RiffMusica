<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header("location: ../index.php?page=corsi");
}

?>

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
            <a href="index.php?page=chitarra" class="corso">
                <div class="corso-div" id="corso-chitarra">
                    <div class="corso-text">
                        <h1>Chitarra <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <a href="index.php?page=basso" class="corso">
                <div class="corso-div" id="corso-basso">
                    <div class="corso-text">
                        <h1>Basso <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <a href="index.php?page=canto" class="corso">
                <div class="corso-div" id="corso-canto">
                    <div class="corso-text">
                        <h1>Canto <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <a href="index.php?page=piano" class="corso">
                <div class="corso-div" id="corso-piano">
                    <div class="corso-text">
                        <h1>Piano <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <hr style="height: 5px;">

            <a href="index.php?page=batteria" class="corso">
                <div class="corso-div" id="corso-batteria">
                    <div class="corso-text">
                        <h1>Batteria <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>
        </div>

        <!-- <div class="corsi-container">
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
        </div> -->

    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "chitarra") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "basso") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "canto") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "piano") { ?>


    <?php } else if (isset($_GET["corso"]) && $_GET["corso"] = "batteria") {  ?>

    <?php } ?>

</body>

</html>