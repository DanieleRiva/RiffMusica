<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riff Musica - Home</title>
</head>

<body>
    <!-- <h1 id="home-title">Prova home</h1> -->

    <div class="posts">
        <?php
        require "utils/display_posts.php";
        Posts::displayPost($conn);
        ?>
    </div>

</body>

</html>