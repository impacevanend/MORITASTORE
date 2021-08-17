<?php 

require_once "clases/Conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT * from usuarios where email='admin'";
$result = mysqli_query($conexion,$sql);
$validar = 0;

if(mysqli_num_rows($result)> 0){
    header("location:index.php");


}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--* fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;300;600;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">

<!-- jquery. -->
<script src="librerias/jquery/jquery-3.2.1.min.js"></script>
<script src="js/funciones.js"></script>

<title>Registro de Usuario</title>

<!--* Sass-Css -->
<link rel="stylesheet" href="../sass/custom.css">


</head>
<body class="bg-secondary">

    <section class="Form my-4 mx-5">
        <div class="containee">
            <div class="row g-0 ">
                <div class="col-lg-5">
                    <img src="../images/registro.jpg" class="img-fluid" alt="modelo-registro" srcset="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <img class="img-fluid h-25" src="../images/logoAzulCentrado.png" alt="logo Morita Store">
                    <form id="frmRegistro">
                    <div class="form-row">
                            <div class="col-lg7">
                                <label>Nombre</label>
                                <input type="text" placeholder="Ingrese su nombre" id="nombre" name="nombre" class="form-control my-2 p-2" aria-describedby="passwordHelpBlock">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg7">
                            <label>Apellido</label>
                                <input type="text" placeholder="Ingrese su apellido" id="apellido" name="apellido" class="form-control my-2 p-2" aria-describedby="passwordHelpBlock">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg7">
                            <label>Correo Electronico</label>
                                <input type="email" placeholder="Ingrese su correo electronico" class="form-control my-2 p-2" id="usuario" aria-describedby="emailHelp" name="usuario">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg7">
                            <label>Contraseña</label>
                                <input type="password" placeholder="Ingrese su contraseña" id="password" name="password" class="form-control my-2 p-2" aria-describedby="passwordHelpBlock">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg7 d-grid gap-2">
                                <a class="btn1 btn-primary" id="registro">Registrar</a>
                            </div>
                        </div>
                        <p>¿Quieres regresar? <a href="index.php">Regresar login</a></p>
                    </form>
</div>
            </div>
        </div>
    </section>
    
    
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/registrarUsuario.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("¡Agregado con exito!");
					}else{
						alert("¡Fallo al agregar!, :(");
					}
				}
			});
		});
	});
</script>
