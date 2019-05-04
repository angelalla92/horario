<?php
require_once '../app/model/Cn.php';
require_once '../app/model/Practicante.php';


$variable = new Practicante();

// echo $_POST['amigos'];
// echo "ESTOY EN ELIMINAR:PHP";
// $variable->eliminar($_GET['dni']);
$res=$variable->eliminar($_POST['amigos']);
// $res="bien";
echo $res;
//

/*
$resultauo = $variable->eliminar($_POST['dni']);
echo $resultauo;
*/
?>