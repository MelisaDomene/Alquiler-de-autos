<?php

require_once ('Auto.php');
require_once ('Cliente.php');
require_once ('Alquiler.php');


class AgenciaAutos {

    public $nombre;
    public $direccion;
    public $telefono;
    public $CBUoCVU;
    public $arrAutos;
    public $arrClientes;
  
    public function __construct ($nombre,$direccion,$telefono,$CBUoCVU){
      $this->nombre = $nombre;
      $this->direccion = $direccion;
      $this->telefono= $telefono;
      $this->CBUoCVU = $CBUoCVU;
      $this->arrAutos = array();
      $this->arrClientes= array();
    }
  
    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombre){
      $this->nombre = $nombre;
    }

    public function getDireccion(){
      return $this->contacto;      
    }
    public function setDireccion($direccion){
      $this->contacto = $contacto;
    }

    public function getTelefono(){
      return $this->telefono;
    }
    public function setTelefono($telefono){
      $this->telefono = $telefono;
    }

    public function getCBUoCVU(){
      return $this->CBUoCVU;
    }
    public function setCBUoCVU($CBUoCVU){
      $this->CBUoCVU = $CBUoCVU;
    }


/* PARTE AUTOS -------------------------- */


    public function getAutos(){
      return $this->arrAutos();
    }

    public function ContieneAuto($dominio){  /* devuelve por patente si el auto existe en la agencia */
      if(str_contains($string, $dominio)){
       return true;
      }else{
       return false;
      }
     }

     public function addAuto($auto){ 
      $this->arrAutos[] = $auto;
    }

    public function removeAuto($dominio){
      /* se reutiliza funcion contieneAuto */
    }



    /* PARTE CLIENTES -------------------------- */

    public function getClientes(){
      return $this->arrClientes();
    }

    public function addCliente($cliente){ 
      $this->arrClientes[]= $cliente;
    }

  }
?>
