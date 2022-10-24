<?php

require_once ('Alquiler.php');

class Auto{

    private $dominio;
    private $marca;
    private $modelo;
    private $kilometros;
    private $alquilado;
  
    public function __construct($dominio,$marca,$modelo, $kilometros){
      $this->patente = $dominio;
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->kilometros = $kilometros;
    }
  
    public function getDominio(){
      return $dominio;
    }
    public function setDominio($dominio){
      $this->dominio = $dominio;
    }
    
    public function getMarca(){
      return $marca;
    }
    public function setMerca($marca){
      $this->marca = $marca;
    }
  
    public function getModelo(){
      return $modelo;
    }
    public function setModelo($modelo){
      $this->modelo = $modelo;
    }
    
    public function getKilometros(){
      return $kilometros;
    }
    public function setKilometros($kilometros){
      $this->kilometros = $kilometros;
    }
  }

?>
