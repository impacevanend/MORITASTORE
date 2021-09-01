<?php 

class Articulos{

    public function agregaImagen($datos){

        $c=new conectar();
        $conexion=$c->conexion();

        $fecha=date('Y-m-d');
        
        $sql="INSERT into imagenes (id_categoria,
										nombre,
										ruta,
										fechaSubida)
							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$fecha')"; //id_imagen 
        $result=mysqli_query($conexion,$sql);
        //Regresa el utlimo agregado en imágenes
        $result=mysqli_query($conexion,$sql);
    }


}


?>