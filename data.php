<?php

include __DIR__ . "/models/Address.php";
include __DIR__ . "/models/Persona.php";
include __DIR__ . "/models/Studente.php";

$studenti = [
    new Studente(
        "Luca", "Lambiase", 101,
        new Address("Via Roma, 123", "Torino", 10135)
    ),
    new Studente(
        "Mario", "Rossi", 125,
        new Address("Viale Alberato, 101", "Milano", 10135)
    ),
    new Studente(
        "Beppe", "Bianchi", 125,
        new Address("Piazza Tor Vergata, 10", "Roma", 10135)
    ),
];

// $studenti[0]->classe = 125;
$studenti[0]->setClasse(125);
