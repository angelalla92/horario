<?php
require_once '../app/model/Cn.php';
require_once '../app/model/Practicante.php';

$variable = new Practicante();
$resultauo = $variable->listar_m();
// $tardanza = $variable->litartardanzas();
print_r($resultauo);
// print_r($tardanza);
//print_r($variable);
?>