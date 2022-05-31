<?php
include "../modelo/ModeloGuardarVideo.php";

$categoria=$_POST["categoria"];
$nombre=$_POST["nombre"];
$url=$_POST["url"];




if (!empty($categoria) && !empty($nombre) && !empty($url)) {


     $id_guardar = guardarVideo($categoria, $nombre, $url);
    if ($id_guardar = 1) {
        

        header("location:../paginas/VisualizarProfesor.html");
        die();
    } else {
        header("location:../../pages/homePage.php");
        die();
    }
} else {
    header("location:../../pages/homePage.php");
    die();
}
