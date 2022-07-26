<?php
class Posts
{
    private static $sql = "SELECT * FROM post ORDER BY data DESC";

    static function displayPost($conn)
    {
        $result = mysqli_query($conn, self::$sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="post-card">
                    <img src="<?php echo $row['immagine'] ?>" id="card-image" class="zoom" data-magnify-src="<?php echo $row['immagine'] ?>">

                    <div class="card-text">
                        <h3 id="card-title"><?php echo $row['titolo'] ?></h3>
                        <!-- <p id="card-description"><?php echo $row['descrizione'] ?></p> -->
                        <p id="card-date" title="Data di pubblicazione"><?php echo date('d-m-Y', strtotime($row['data'])); ?></p>
                    </div>
                </div>
<?php
            }
        }
    }
}
