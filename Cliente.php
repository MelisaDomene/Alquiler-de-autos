<?php

class Cliente{

    public $id;
    public $DNI;
    public $nombreCompleto;
    public $direccion;
    public $telefono;    

public function __construct($id, $DNI, $nombreCompleto, $direccion, $telefono){
    $this->id = $id;
    $this->DNI = $DNI;
    $this->nombreCompleto = $nombreCompleto;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
}

public function getId(){
    return $this->id;
}

public function getDNI(){
    return $this->DNI;
}
public function setDNI($DNI){
    $this->DNI = $DNI;
}

public function getNombreCompleto(){
    return $this->nombreCompleto;
}
public function setNombreCompleto($nombreCompleto){
    $this->nombreCompleto = $nombreCompleto;
}

public function getDireccion(){
    return $this->direccion;
}
public function setDireccion($direccion){
    $this->direccion = $direccion;
}

public function getTelefono(){
    return $this->telefono;
}
public function setTelefono($telefono){
    $this->telefono = $telefono;
}

}

?>
