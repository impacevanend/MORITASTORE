<?php

session_start();
if (isset($_SESSION['usuario'])) {





?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/catalogo.css">
        <link rel="stylesheet" type="text/css" href="pruebaModal/bootstrap/css/bootstrap.css">
        <script src="pruebaModal/jquery-3.1.1.min.js"></script>
        <script src="pruebaModal/bootstrap/js/bootstrap.js"></script>
        <?php require_once "dependenciasCp.php"; ?>

    </head>

    <body>
        <main class="container-fluid">
            <!-- encabezado -->
            <div class="row">
                <div class="col-12 bg-primary">
                    <img src="../img/android-icon-72x72.png" class="rounded float-start img-fluid m-1" alt="logo">
                    <ul class="nav justify-content-end">
                        <!-- ../procesos/regLogin/salir.php salirPrueba.php-->
                        <div class="d-flex align-items-center mt-4"> <a href="../procesos/ejemplo/salir.php" style="color:white; text-decoration:none"><span class="fs-3"><i class="far fa-times-circle me-3 "></i> Salir del sitio</span></a></div>
                </div>
                <!--*menu  Columna izquierda-->
                <div class="col-12 col-lg-3 border bg-success">
                    !--*menu Columna izquierda-->
                    <?php require_once("menu.php") ?>
                    <?php require_once "../clases/Conexion.php";

                    $c = new conectar();
                    $conexion = $c->conexion();
                    $sql = "SELECT id_categoria, nombreCategoria FROM categorias";

                    $result = mysqli_query($conexion, $sql);
                    ?>
                </div>
                <div class="col-12 col-lg-9 border">
                    <!--*menu  Columna derecha-->
                    <div class="row">
                        <div class=" col-12 col-lg-12 p-2 border">
                            <!-- *Migas de pan -->
                            <ol class="breadcrumb alert alert-dark">
                                <li class="breadcrumb-item h5">Administrar Usuarios</li>
                                <a class="breadcrumb-item active" href="categoria.html" aria-current="page">Home</a>
                                <a class="breadcrumb-item active alert-link" href="categoria.html">Usuarios</a>
                            </ol>

                            <!-- creasion de los botones  -->
                            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                <button class="btn btn-dark me-md-1" type="button"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-success me-md-1" type="button"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-success me-md-1" type="button"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>

                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="lg-4">

                                <form id="frmRegistro">
                                    <div class="form-row">
                                        <div class="">
                                            <label>Nombre</label>
                                            <input type="text" placeholder="Ingrese su nombre" id="nombre" name="nombre" class="form-control my-2 p-2" aria-describedby="passwordHelpBlock">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="">
                                            <label>Apellido</label>
                                            <input type="text" placeholder="Ingrese su apellido" id="apellido" name="apellido" class="form-control my-2 p-2" aria-describedby="passwordHelpBlock">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="">
                                            <label>Correo Electronico</label>
                                            <input type="email" placeholder="Ingrese su correo electronico" class="form-control my-2 p-2" id="usuario" aria-describedby="emailHelp" name="usuario">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm7">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Ingrese su contraseña" id="password" name="password" class="form-control my-2 p-2" aria-describedby="passwordHelpBlock">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class=" d-grid gap-2">
                                            <a class="btn1 btn-primary" id="registro">Registrar</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="lg-8">
                                <div id="tablaUsuariosLoad">

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <!-- *PAginación -->

                    </div>
                </div>
                <!-- introduccion texto -->

            </div>
            </div>
            <div class="row">
                <p class="bg-secondary  mt-1 text-center h-1 d-block p-2 text-success">M&S © 2021 Todos los derechos reservados.
                    Versión 1.1.1</p>
            </div>

        </main>

    </body>

    </html>


    <script src="../js/menu.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php')
        $('#registro').click(function() {

            vacios = validarFormVacio('frmRegistro');

            if (vacios > 0) {
                alert("Debes llenar todos los campos!!");
                return false;
            }

            datos = $('#frmRegistro').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "../procesos/regLogin/registrarUsuario.php",
                success: function(r) {
                    alert(r);

                    if (r == 1) {
                        alert("¡Agregado con exito!");
                    } else {
                        alert("¡Fallo al agregar!, :(");
                    }
                }
            });
        });
    });
</script>

<?php
} else {
    header("location:../index.php");
}

?>