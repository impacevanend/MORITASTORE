<?php 
class conectar{

    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $database = "morita";

    public function conexion(){

        $conexion = mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->database);
        return $conexion;
    }

    
}


// *Verificando conexiòn.

// $obj = new conectar();

// if($obj->conexion()){
//     echo "Conectado";
// }
?>
