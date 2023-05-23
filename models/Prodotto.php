<?php

class Prodotto {
    public $nome;
    public $marca;
    public $prezzo;
    public $tipo;
    public $categoria;
    public $immagine;
    public $ingredienti = [];
    public $materiali = [];


    function __construct($_nome, $_marca, $_prezzo, $_tipo, $_categoria, $_immagine, $_ingredienti, $_materiali = []) {
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->tipo = $_tipo;
        $this->categoria = $_categoria;
        $this->immagine = $_immagine;   
        $this->ingredienti = $_ingredienti; 
        $this->materiali = $_materiali;
    }

    public function getCategoria() {
        return $this->categoria->nome;
    }

    public function getRazza() {
        return $this->categoria->razza;
    }
}