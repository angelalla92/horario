<?php
require_once '../app/model/Cn.php';
require_once '../app/model/Practicante.php';

$respuesta = new Practicante();

$res =$respuesta->listar_practicantespordni($_POST['dino']);
echo $res;
// print_r($_POST);
?>
