<?php

function randomPassword()
{
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Password Generator</title>
</head>

<body>
    <div class="container my-5">
        <h1>PHP Password Generator</h1>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-6">
                <form class="mb-5" action="index.php" method="GET">
                    <label class="text-danger mb-4" for="psw">Inserisci un numero che determinerà la lunghezza della password generata</label>
                    <input class="form-control" name="numero" type="number" id="psw">
                    <button class="btn btn-danger mt-3" type="submit">Invia</button>
                </form>
                <h2>Password Generata: <?php echo randomPassword() ?> </h2>
            </div>
        </div>

    </div>
</body>

</html>