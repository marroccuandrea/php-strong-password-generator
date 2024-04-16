<?php
session_start();
require_once __DIR__ . '/data/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generata</title>
</head>

<body>
    <div class="container my-5">
        <h2>Password Generata: <span class="text-danger"><?php echo $_SESSION["numero_session"] ?></span> </h2>
    </div>
    <div class="container my-5">
        <a href="redirect.php">Ritorna al generatore</a>
    </div>
</body>

</html>
<style>
    body {
        background-color: rgb(192, 192, 192);
    }
</style>