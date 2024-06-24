<?php

class Studente
{
    public $nome;
    public $cognome;
    public $classe;
    public $address;

    public function __construct($nome, $cognome, $classe, Address $address) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->classe = $classe;
        $this->address = $address;
    }

    public function nomeCompleto()
    {
        return "$this->nome $this->cognome";
    }

    public function saluta()
    {
        return "Ciao $this->nome";
    }

    public function descrizione()
    {
        return "Lo studente " . $this->nomeCompleto() . " è iscritto alla classe #" . $this->classe;
    }

}