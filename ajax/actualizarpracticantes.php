<?php
require_once '../app/model/Cn.php';
require_once '../app/model/Practicante.php';
$cuacua = new Practicante;
$a=$cuacua->actualizar_practicandos($_POST['dni'],$_POST['apePa'],$_POST['apeMa'],$_POST['nombre'],$_POST['fech'],$_POST['s'],$_POST['ct'],$_POST['descripcion']);
echo $a;
// print_r($_POST);
?>