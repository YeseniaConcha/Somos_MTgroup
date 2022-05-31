<?php
    function guardarVideo($categoria, $nombre, $url){


        try{
            include "../config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn ->prepare("INSERT INTO videos (URL_VIDEO, NOMBRE_VIDEO, CATEGORIA) VALUE (:url_video, :nombre, :categoria)");

            $stmt ->bindParam(":categoria",$categoria);            
            $stmt ->bindParam(":nombre",$nombre);
            $stmt ->bindParam(":url_video",$url);

            
            $stmt ->execute();
            
            $value = $stmt->fetch(PDO::FETCH_OBJ);
            
            $conn= null;
            
            return $value;


        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }

    }