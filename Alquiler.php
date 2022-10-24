<?php

class Alquiler {

    public $precio;
    public $alquilado;


public function __construct ($precio,$alquilado){

  $this->precio = $precio;
  $this->alquilado = false; /* por defecto no esta alquilado */

}


/* hacer un funcion booleana que devuelva verdadero si esta alquilado */
/*
  public function alquilado(){
   if(){
   return true;
   }else{
    return false;
    }
  }
*/
}
?>
