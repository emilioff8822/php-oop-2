<?php

include_once __DIR__ .'/Animale.php';

class Gatto extends Animale {
    private $razza;

    function __construct($_nome, $_razza) {
        parent::__construct($_nome);
        $this->setRazza($_razza);
    }

    //SET
    public function setRazza($_razza){
        $this->razza = $_razza;
    }

    //GET
    public function getRazza(){
        return $this->razza;
    }
}