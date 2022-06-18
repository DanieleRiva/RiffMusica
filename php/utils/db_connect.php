<?php

class Connection
{
    static function Connect($host, $user, $password, $db)
    {
        $conn = mysqli_connect($host, $user, $password, $db);
        return $conn;
    }
}
