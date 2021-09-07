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
                    <?php  require_once "../clases/Conexion.php";
                    
                        $c = new conectar();
                        $conexion = $c->conexion();
                        $sql="SELECT id_categoria, nombreCategoria FROM categorias"; 

                        $result = mysqli_query($conexion,$sql);
                    ?>
                </div>
                <div class="col-12 col-lg-9 border">
                    <!--*menu  Columna derecha-->
                    <div class="row">
                        <div class="col-12 col-lg-12 p-2 border">
                            <!-- *Migas de pan -->
                            <ol class="breadcrumb alert alert-dark">
                                <li class="breadcrumb-item h5">Articulos</li>
                                <a class="breadcrumb-item active" href="categoria.html" aria-current="page">Home</a>
                                <a class="breadcrumb-item active alert-link" href="categoria.html">Articulos</a>
                            </ol>

                            <!-- creasion de los botones  -->
                            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                <button class="btn btn-dark me-md-1" type="button"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-success me-md-1" type="button"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-success me-md-1" type="button"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                <form id="frmArticulos" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <lable>Categoria</lable>
                                        <select class="from-control input-sm form-label" name="categoriaSelect" id="categoriaSelect">
                                            <option value="A">Elegir Categoría</option>
                                        <?php while($ver = mysqli_fetch_row($result)):?>
                                            <option value="<?php echo $ver[0] ?>"><?php echo $ver[1] ?></option>
                                        <?php endwhile; ?>
                                        </select><br>
                                    </div>
                                    <div class="mb-3">

                                        <input type="text" name="nombre" id="nombre" class="from-control input-sm ">
                                        <label for="" class="form-label">Nombre</label>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="descripcion" name="descripcion" class="from-control input-sm ">
                                        <label for="" class="form-label">Descripción</label>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="cantidad" id="cantidad" class="from-control input-sm ">
                                        <label for="" class="form-label">Cantidad</label>

                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="precio" id="precio" class="from-control input-sm ">
                                        <label for="" class="form-label">Precio</label>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="imagen" id="imagen" class="from-control input-sm ">
                                        <label for="" class="form-label">Imagen del Articulo</label>
                                    </div>
                                    <br><br>
                                    <button class="btn btn-dark me-md-1" type="button" id="btnAgregarArticulo"><i class="fa fa-plus"></i> Agregar</button>
                                </form>
                            </div>
                            <div class="col-sm-8">
                                <div class="table 10" id="tablaArticulosLoad">

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <!-- *PAginación -->
                        <div class="col-12 col-lg-12 p-2 border">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="../dashboard.html">Anterior</a></li>
                                    <li class="page-item"><a class="page-link" href="clientes.html">1</a></li>
                                    <li class="page-item"><a class="page-link" href="clientes.html">2</a></li>
                                    <li class="page-item"><a class="page-link" href="clientes.html">3</a></li>
                                    <li class="page-item"><a class="page-link" href="../dashboard.html">próximo</a></li>
                                </ul>
                            </nav>
                        </div>
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

        <script>
            $(document).ready(function() {

                $('#tablaArticulosLoad').load("articulos/tablaArticulos.php");

                $('#btnAgregarArticulo').click(function() {

                    vacios = validarFormVacio('frmArticulos ');

                    if (vacios > 0) {
                        alertify.alert("¡Debes llenar todos los campos!");
                        return false;
                    }

                    var formData = new FormData(document.getElementById("frmArticulos"));

                    $.ajax({
                        url: "../procesos/articulos/insertaArticulos.php",
                        type: "post",
                        dataType: "html",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,

                        success: function(r) {

                          

                            if (r == 1) {
                                $('#frmArticulos')[0].reset();
                                $('#tablaArticulosLoad').load("articulos/tablaArticulos.php"); 
                                alertify.success("¡Agregado con exito!");
                            } else {
                                alertify.error("¡Fallo al subir el archivo!");
                            }
                        }
                    });

                });
            })
        </script>

        <script src="../js/menu.js"></script>
    </body>

    </html>

<?php
} else {
    header("location:../index.php");
}

?>