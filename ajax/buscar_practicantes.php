<?php
require_once '../app/model/practicante.php';
require_once '../app/model/Cn.php';
$buscador = new practicante();
$bus=$buscador->buscar_practicante($_POST['palabra2']);
echo $bus;
// print_r( $bus);
?>