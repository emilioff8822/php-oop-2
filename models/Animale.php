<?php

class Animale {
    private $nome;

    function __construct($_nome) {
        $this->setNome($_nome);
    }

    //SET
    public function setNome($_nome){
        $this->nome = $_nome;
    }

    //GET
    public function getNome(){
        return $this->nome;
    }
}