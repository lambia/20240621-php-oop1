<?php

include __DIR__ . "/models/Studente.php";

$studente = new Studente("Luca", "Lambiase", 001);
$studente->nome = "Luca Tommaso";

$students = [
    new Studente("Matteo", "Federici", 125),
    new Studente("Giuseppe", "De Rosa", 125),
    new Studente("Francesco", "Sbagliato", 125)
];

$students[2]->cognome = "Madonna";

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

    <ul>
        <?php foreach ($students as $studente) { ?>
            <li><?= $studente->descrizione() ?></li>
        <?php } ?>
    </ul>

</body>

</html>