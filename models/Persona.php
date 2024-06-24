<?php

class Persona
{
    public $nome;
    public $cognome;
    public $address;

    public function __construct($nome, $cognome, Address $address = null) {

        $this->nome = $nome;
        $this->cognome = $cognome;
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
        return "La persona " . $this->nomeCompleto() . " vive a " . $this->address?->city;
    }

}