<?php
    include '../modelo/ModeloEliminar.php';
    
    $id = $_POST["eliminar"];

    echo $id;
    
    if(!empty($id)){
        
        $eliminada = eliminar($id);
        
        
        if ($eliminada > 0){

            
            echo '<script> let a = alert("eliminado con exito");
                if(a){
                    window.location.href = "../paginas/visualizarProfesor.html";
                } else {
                    window.location.href = "../paginas/visualizarProfesor.html";
                }
             </script>';
            die();
        } else {

   
            echo '<script> alert("error al eliminar"); </script>';
            header("location:../paginas/VisualizarProfesor.html"); 
            
            die();
              
        }
    } else {
        echo '<script> alert("error al eliminar"); </script>';
            header("location:../../pages/homePage.php"); 
        die();
    }