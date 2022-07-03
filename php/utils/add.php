<?php

require("db_connect.php");
$conn = Connection::Connect("localhost", "root", "", "RiffMusica");
mysqli_set_charset($conn, "utf8mb4");

$sql = "INSERT INTO Docente (idDoc, nome, cognome, nascita, recapito, email, password) VALUES (1, 'Daniele', 'Riva', STR_TO_DATE('7-8-2003', '%d-%m-%Y'), 'Via Beato Carcano 2', 'danieleriva03@gmail.com', '" . password_hash("1234", PASSWORD_DEFAULT) . "')";
echo $sql;
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
