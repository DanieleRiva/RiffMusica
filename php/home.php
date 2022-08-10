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

    <!-- <div class="search-options">
        <div class="search-box">
            <input type="text" name="search-input" id="search-input" placeholder="Cerca un post...">
            <button id="search-button">🔎</button>
        </div>

        <select id="search-tag" name="" id="">
            <option default value="">Tutti</option>
            <option value="">Tag 1</option>
            <option value="">Tag 2</option>
            <option value="">Tag 3</option>
            <option value="">Tag 4</option>
            <option value="">Tag 5</option>
        </select>

    </div> -->

    <div class="posts">
        <?php
        require "utils/display_posts.php";
        Posts::displayPost($conn);
        ?>
    </div>

</body>

</html>