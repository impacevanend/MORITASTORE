<?php


    

    
    
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

        if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
            echo "¡Se guardo con éxito!";
        }
?>