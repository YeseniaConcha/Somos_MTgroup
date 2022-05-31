<?php

function update($id,$nombre,$url,$categoria)
{
    try {
        include '../config.php';
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn ->prepare("update VIDEOS set URL_VIDEO = :url_video , NOMBRE_VIDEO = :nombre , CATEGORIA = :categoria  where id_videos = :id");


        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":url_video", $url);
        $stmt->bindParam(":categoria", $categoria);

        $stmt ->execute();
            
        $value = $stmt->fetch(PDO::FETCH_OBJ);
        
        $conn= null;
        
        return $value;

        
        // return $stmt->rowCount();
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}