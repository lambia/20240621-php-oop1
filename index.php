<?php

include __DIR__ . "/models/Studente.php";
include __DIR__ . "/models/Address.php";

$luca = new Studente("Luca", "Lambiase", 1, new Address("Via Roma, 123", "Torino", 10135) );
$altro = new Studente("Mario", "Rossi", 22, new Address("Viale Alberato, 101", "Torino", 10135) );

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
    </pre>

</body>

</html>