<?php

include "../modelo/ModeloEditar.php";

$id = $_POST["id_video"];
$nombre = $_POST["nombre"];
$url = $_POST["url"];
$categoria = $_POST["categoria"];



$resultado = update($id, $nombre, $url, $categoria);


header("location:../paginas/VisualizarProfesor.html");
