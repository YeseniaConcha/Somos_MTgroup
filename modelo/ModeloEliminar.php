<?php

function eliminar($id){
        try{
            include '../config.php';
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn ->prepare("DELETE FROM videos WHERE ID_VIDEOS = :id");
            
            $stmt ->bindParam(":id",$id);
            
            $stmt ->execute();
            
            $conn= null;
            
            return $stmt->rowCount();
        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }
    }

    ?>