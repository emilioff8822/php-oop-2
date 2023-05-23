<?php

class Prodotto {
    public $nome;
    public $marca;
    public $prezzo;
    public $tipo;
    public $categoria;
    public $immagine;

    function __construct($_nome, $_marca, $_prezzo, $_tipo, $_categoria, $_immagine) {
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->tipo = $_tipo;
        $this->categoria = $_categoria;
        $this->immagine = $_immagine;   
    }

    public function getCategoria() {
        return $this->categoria->nome;
    }

    public function getRazza() {
        return $this->categoria->razza;
    }
}
