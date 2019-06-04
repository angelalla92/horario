<?php
require_once 'app/model/Cn.php';
require_once 'app/model/Practicante.php';

$variable = new Practicante();
$resultauo = $variable->listar_m();
// $tardanza = $variable->litartardanzas();
// print_r($tardanza);
//print_r($variable);

// echo $resultauo;aparece en la vista de lista el arreglo..XD
?>