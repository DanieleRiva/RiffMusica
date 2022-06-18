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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">

</head>

<body>
    <?php

    include("php/header.php");

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

</body>

</html>