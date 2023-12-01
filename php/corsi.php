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

    











        <!-- <div class="corsi-container">
            <a href="index.php?page=docenti#chitarra" class="corso">
                <div class="corso-div" id="corso-chitarra">
                    <div class="corso-text">
                        <h1>Chitarra <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <a href="index.php?page=docenti#basso" class="corso">
                <div class="corso-div" id="corso-basso">
                    <div class="corso-text">
                        <h1>Basso <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <a href="index.php?page=docenti#canto" class="corso">
                <div class="corso-div" id="corso-canto">
                    <div class="corso-text">
                        <h1>Canto <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <a href="index.php?page=docenti#piano" class="corso">
                <div class="corso-div" id="corso-piano">
                    <div class="corso-text">
                        <h1>Piano <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>

            <hr style="height: 5px;">

            <a href="index.php?page=docenti#batteria" class="corso">
                <div class="corso-div" id="corso-batteria">
                    <div class="corso-text">
                        <h1>Batteria <span id="corso-arrow">❱❱</span></h1>
                    </div>
                </div>
            </a>
        </div> -->

</body>

</html>