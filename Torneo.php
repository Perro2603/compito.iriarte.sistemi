<?php

class Torneo{

    private $nome;
    private $codice;
    private $data;
    private $sede;
    private $elenco_di_partite;

public function __construct($nome,$codice,$data,$sede,$elenco_di_partite){

    $this->nome=$nome;
    $this->codice=$codice;
    $this->data=$data;
    $this->sede=$sede;
    $this->elenco_di_partita=$elenco_di_partite;
}

public  function getCodice(){
    return $this->codice;
}

public  function getNome(){
    return $this->nome;
}

public  function getData(){
    return $this->data;

}
public  function getSede(){
    return $this->sede;
}

public  function getElenco_di_partita(){
    return $this->elenco_di_partita;
}

}

