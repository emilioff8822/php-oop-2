<?php

class Prodotto {
    private $nome;
    private $marca;
    private $prezzo;
    private $tipo;
    private $categoria;
    private $immagine;
    private $ingredienti = [];
    private $materiali = [];

    function __construct($_nome, $_marca, $_prezzo, $_tipo, $_categoria, $_immagine, $_ingredienti, $_materiali = []) {
        $this->setNome($_nome);
        $this->setMarca($_marca);
        $this->setPrezzo($_prezzo);
        $this->setTipo($_tipo);
        $this->setCategoria($_categoria);
        $this->setImmagine($_immagine);   
        $this->setIngredienti($_ingredienti); 
        $this->setMateriali($_materiali);
    }

    //SET
    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function setMarca($_marca){
        $this->marca = $_marca;
    }
    public function setPrezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
    public function setTipo($_tipo){
        $this->tipo = $_tipo;
    }
    public function setCategoria($_categoria){
        $this->categoria = $_categoria;
    }
    public function setImmagine($_immagine){
        $this->immagine = $_immagine;
    }
    public function setIngredienti($_ingredienti){
        $this->ingredienti = $_ingredienti;
    }
    public function setMateriali($_materiali){
        $this->materiali = $_materiali;
    }

    //GET
    public function getNome(){
        return $this->nome;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getImmagine(){
        return $this->immagine;
    }
    public function getIngredienti(){
        return $this->ingredienti;
    }
    public function getMateriali(){
        return $this->materiali;
    }
}