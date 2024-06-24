<?php

include __DIR__ . "/models/Studente.php";
include __DIR__ . "/models/Address.php";


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
        "Beppe", "Bianchi", 125
    ),
];
