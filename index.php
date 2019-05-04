<?php
if(isset($_GET['url'])){
    $view=$_GET['url'];
    switch ($view) {
        case 'home': 
        include './app/view/home.php';
        break;
        case 'formulario': 
        include './app/view/formulario.php';
        break;
        case 'listar':
        include './app/view/listar.php';
        break;
        case 'eliminar':
        include './app/controller/eliminar.php';
        break;
        case 'registrar': 
        include './app/controller/registrar_c.php';
        break;        
        case 'fprmularioreporte':
        include './app/view/reporteformulario.php';
        break;
        case 'reporte':
        include './app/view/reporte.php';
        break;
        default:
        echo "ERROR 404";
    }
}else{
   echo "<a href='./home'>home</a><br>";
   echo "<a href='./formulario'>formulario</a><br>";
   echo "<a href=' ./listar'>lista</a><br>";
   
}
