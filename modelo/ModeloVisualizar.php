<?php
function buscar()
{
    try {
        include "../config.php";
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT * FROM videos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $datos = $stmt->fetchAll();

        return json_encode($datos);
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}