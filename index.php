<?php

include __DIR__ . "/models/Studente.php";

$luca = new Studente("Luca", "Lambiase", 001);
$luca->nome = "Luca Tommaso";

$altro = new Studente("Mario", "Rossi", 22, "mariorossi@gmail.com");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Hello OOP World</h1>

    <pre>
        <?= var_dump($luca) ?>
        <?= var_dump($altro) ?>
        <?= var_dump($indirizzo) ?>
    </pre>

</body>

</html>