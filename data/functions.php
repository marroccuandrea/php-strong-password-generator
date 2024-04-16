<?php

function randomPassword()
{
    if (isset($_GET["numero"])) {
        $number = $_GET["numero"];
        $simboli = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=";
        $pass = array();
        $simboli_length = strlen($simboli) - 1;
        for ($i = 0; $i < $number; $i++) {
            $n = rand(0, $simboli_length);
            $pass[] = $simboli[$n];
        }
        return implode($pass);
    }
}

if (isset($_GET["numero"])) {
    session_start();
    $_SESSION["numero_session"] = randomPassword();
    header('Location: ./output.php');
}
