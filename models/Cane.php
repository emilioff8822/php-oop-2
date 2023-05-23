<?php

include_once __DIR__ .'/Animale.php';

class Cane extends Animale {
    public $razza;

    function __construct($_nome, $_razza) {
        parent::__construct($_nome);
        $this->razza = $_razza;
    }
}
