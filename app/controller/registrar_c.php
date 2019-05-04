<?php
require_once 'app/model/Cn.php';
require_once 'app/model/Practicante.php';
$variable = new Practicante();

$res=$variable->insertar($_POST['dni'],$_POST['apePa'],$_POST['apeMa'],$_POST['nombre'],$_POST['fech'],$_POST['s'],$_POST['ct'],$_POST['descripcion']);
echo $res;

?>