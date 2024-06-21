<?php
class Studente {
    public $nome;
    public $cognome;
    public $classe;
}

$prova = new Studente();
$prova->nome = "Matteo";
$prova->cognome = "Federici";
$prova->classe = 125;

$giuseppe = new Studente();
$giuseppe->nome = "Giuseppe";
$giuseppe->cognome = "De Rosa";
$giuseppe->classe = 125;

$francesco = new Studente();
$francesco->nome = "Francesco";
$francesco->cognome = "Madonna";
$francesco->classe = 125;
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
        <li><?= "$prova->nome $prova->cognome: Classe #$prova->classe" ?></li>
        <li><?= "$giuseppe->nome $giuseppe->cognome: Classe #$giuseppe->classe" ?></li>
        <li><?= "$francesco->nome $francesco->cognome: Classe #$francesco->classe" ?></li>
    </ul>
    
</body>
</html>