<?php
if (isset($_POST["login"])) {
    require("db_connect.php");
    $conn = Connection::Connect("localhost", "root", "", "RiffMusica");
    mysqli_set_charset($conn, "utf8mb4");

    checkUser($conn);
    mysqli_close($conn);

    header("location: ../../index.php?page=registro");
} else
    header("location: ../../index.php");

function checkUser($conn)
{
    session_start();

    $stmt = $conn->prepare("SELECT * FROM Docente WHERE email = ?");
    $stmt->bind_param('s', $_POST["email"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            if (password_verify($_POST["password"], $row["password"])) {
                $_SESSION["idDoc"] = $row["idDoc"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["nome"] = $row["nome"];
                $_SESSION["cognome"] = $row["cognome"];

                return true;
            }
        }
    }

    $_SESSION["state"] = "login_error_credentials";
    return false;
}


// $stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
// $stmt->bind_param('s', $name); // 's' specifies the variable type => 'string'
// $stmt->execute();

// $result = $stmt->get_result();
// while ($row = $result->fetch_assoc()) {
//     // Do something with $row
// }