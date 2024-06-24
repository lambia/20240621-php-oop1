<?php

class Studente
{
    public $codiceFiscale; //utile per poter assegnare il valore in secondo momento nel costruttore o altrove
    public $email = ""; //utile quando una variabile d'istanza ha un valore fisso che non dipende da controlli o logica

    //classe può essere passato al costruttore altrimenti ha un valore di default
    public function __construct(public $nome, public $cognome, public $classe = "") {
        $this->codiceFiscale = ""; //questo viene settato sempre uguale ma potrebbe far parte di un controllo (business logic)
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