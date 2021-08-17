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

        </div>
        <div class="col-12 col-lg-9 border">
          <!--*menu  Columna derecha-->
          <div class="row">
            <div class="col-12 col-lg-12 p-2 border">
              <!-- *Migas de pan -->
              <ol class="breadcrumb alert alert-dark">
                <li class="breadcrumb-item h5">Categoria</li>
                <a class="breadcrumb-item active" href="categoria.html" aria-current="page">Home</a>
                <a class="breadcrumb-item active alert-link" href="categoria.html">Categoria</a>
              </ol>

              <!-- creasion de los botones  -->
              <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                <button class="btn btn-dark me-md-1" type="button"><i class="fa fa-plus"></i></button>
                <button class="btn btn-success me-md-1" type="button"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-success me-md-1" type="button"><i class="far fa-trash-alt"></i></button>
              </div>
            </div>

          </div>
          <!-- formulario categoria -->
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <form id="frmCategorias">
                  <label >Categoria</label>
                  <input type="text" name="categoria" id="categoria" class="form-control input-sm">
                  <br><br>
                  <span class="btn btn-primary" id="btnAgregarCategoria">Agregar</span>
                </form>
              </div>
              <div class="col-sm-4">
                <div id="tablaCategoriaLoad"></div>
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
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="actualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Actualiza Categorias</h4>
          </div>
          <div class="modal-body">
            <form id="frmCategoriaU">
              <input type="text" hidden="" id="idcategoria" name="idcategoria">
              <label>Categoria</label>
              <input type="text" id="categoriaU" name="categoriaU" class="form-control input-sm">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" id="btnActualizaCategoria">Guardar</button>
          </div>
        </div>
      </div>
    </div>

  </body>

  </html>
  <script>
    $(document).ready(function() {
      $('#tablaCategoriaLoad').load("categoria/tablaCategoria.php");
      $('#btnAgregarCategoria').click(function() {

        vacios = validarFormVacio('frmCategorias');

        if (vacios > 0) {
          alertify.alert("¡Debes llenar todos los campos!");
          return false;
        }

        datos = $('#frmCategorias').serialize();
        $.ajax({
          type: "POST",
          data: datos,
          url: "../procesos/categorias/agregaCategoria.php",
          success: function(r) {
            if (r == 1) {
              //Permite limpiar el formulario al colocar un registro.
              $('#frmCategorias')[0].reset();
              //**************************/
              $('#tablaCategoriaLoad').load("categoria/tablaCategoria.php")
              alertify.success("¡Categoría agregada con exito!");
            } else {
              alertify.error("¡No fue posible agregar categoría!");

            }
          }
        });
      });
    });
  </script>


  <script type="text/javascript">
    $(document).ready(function() {
      $('#btnActualizaCategoria').click(function() {

        datos = $('#frmCategoriaU').serialize();
        $.ajax({
          type: "POST",
          data: datos,
          url: "../procesos/categorias/actualizaCategoria.php",
          success: function(r) {
            if (r == 1) {
              $('#tablaCategoriaLoad').load("categoria/tablaCategoria.php");
              alertify.success("¿Actualizado con exito!");
            } else {
              alertify.error("¿No se pudo actaulizar!");
            }
          }
        });
      });
    });
  </script>

  <script>
    function agregaDato(idCategoria, categoria) {
      $('#idcategoria').val(idCategoria);
      $('#categoriaU').val(categoria);
    }

    function eliminaCategoria(idcategoria) {
      alertify.confirm('¿Desea eliminar esta categoría?', function() {
        $.ajax({
          type: "POST",
          data: "idcategoria=" + idcategoria,
          url: "../procesos/categorias/eliminarCategoria.php",
          success: function(r) {
            if (r == 1) {
              $('#tablaCategoriaLoad').load("categoria/tablaCategoria.php");
              alertify.success("Eliminado con exito!!");
            } else {
              alertify.error("No se pudo eliminar :(");
            }
          }
        });
      }, function() {
        alertify.error('¡Operación cancelada!')
      });
    }
  </script>

  <script src="../js/menu.js"></script>

<?php
} else {
  header("location:../index.php");
}

?>