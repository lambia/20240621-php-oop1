<?php

class Studente extends Persona
{
    private $classe;

    public function __construct($nome, $cognome, $classe, Address $address = null)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->address = $address;

        $this->classe = $classe;
    }

    public function getClasse() {
        return "#" . $this->classe;
    }

    public function setClasse($nuovaClasse) {
        if($nuovaClasse > 0 && $nuovaClasse < 1000) {
            $this->classe = $nuovaClasse;
        } else {
            $this->classe = 1;
        }
    }

    public function descrizione()
    {
        return "Lo studente " . $this->nomeCompleto() . " vive a " . $this->address?->city . " e studia in classe #" . $this->classe;
    }

}