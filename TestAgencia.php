<?php

require('Agencia.php');

$MyM = new AgenciaAutos("MyM", "Arana 360", "2494325249", "CBU");

$MyM->addCliente($cliente1);
$MyM->addAuto($auto1);

var_dump($MyM);

?>