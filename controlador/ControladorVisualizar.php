<?php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');




// include "../Config.php";
// $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $sql = "SELECT * FROM videos";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $datos = $stmt->fetchAll();
// echo json_encode($datos);



include "../modelo/ModeloVisualizar.php";


$hola = buscar();

echo $hola;
