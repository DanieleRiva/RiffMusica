<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <?php if (isset($_SESSION["idDoc"])) { ?>

        <h1>Sei loggato</h1>
        <a href="php/utils/logout.php">Logout</a>

    <?php } else { ?>

        <div class="login">
            <form action="php/utils/login.php" method="POST" class="login-form" enctype="application/x-www-form-urlencoded">
                <h1>Registro elettronico</h1>
                <p>Effettua il login per accedere come docente</p>

                <hr>

                <div class="login-field">
                    <h4>Email</h4>
                    <input required type="email" name="email" placeholder="Inserisci la tua email docente">
                </div>

                <div class="login-field">
                    <h4>Password</h4>
                    <input required type="password" name="password" placeholder="Inserisci la tua password docente">
                </div>

                <div class="login-field">
                    <input id="login-button" required type="submit" name="login" value="Login" placeholder="Inserisci la tua password docente">
                </div>

                <?php if (isset($_SESSION["state"]) && $_SESSION["state"] == "login_error_credentials") { ?>
                    <p id="alert">Non esiste un account con le credenziali inserite.</p>
                <?php
                    unset($_SESSION["state"]);
                } ?>
            </form>
        </div>

    <?php } ?>
</body>

</html>