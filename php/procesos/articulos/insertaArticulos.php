<?php

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

    $obj = new Articulos();
    

    
    
    $datos = array(
        $_POST['categoriaSelect'],
        $_POST['nombre'],
        $_POST['descripsion'],
        $_POST['cantidad'],
        $_POST['precio']
        );

        $nombreImg = $_FILES['imagen']['name'];
        $rutaAlmacenamiento = $_FILES['imagen']['tmp_name'];
        $carpeta = '../../archivos/';
        $rutaFinal = $carpeta.$nombreImg;

        $datosImg=array(
            $_POST['categoriaSelect'],
            $nombreImg,
            $rutaFinal
                        );

        if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
            
           echo $idimagen=$obj->agregaImagen($datosImg);
        }
?>