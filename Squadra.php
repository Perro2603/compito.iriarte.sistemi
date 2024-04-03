<?php

class Squadra {

    private $nome;
    private $colore;
    private $maschile;
    private $femminile;
    private $categoria;
    private $codice_csen;
    private $p_iva;


public function __construct($nome,$colore,$maschile,$femminile,$categoria =null,$codice_csen=null,$p_iva=null){

    $this->nome=$nome;
    $this->colore=$colore;
    $this->maschile=$maschile;
    $this->femminile=$femminile;
    $this->categoria=$categoria;
    $this->codice_csen=$codice_csen;
}


public function getNome(){

   return $this->nome;

}

}

?>