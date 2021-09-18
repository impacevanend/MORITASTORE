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
             

          </div>
          <!-- formulario categoria -->
          <div class="container-fluid">
        
            <div class="row">
              <div class="col-sm-12">
                  <span class="btn btn-default" id="ventaProductosBtn">Vender producto</span>
                  <span class="btn btn-default" id="ventasHechasBtn">Ventas hechas</span>
              </div>
              <div class="row">
                <div class="col-sm-12">
                    <div id="ventaProductos"></div>
                    <div id="ventasHechas"></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <!-- *PAginación -->
            <div class="col-12 col-lg-12 p-2 border">
             
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
   
  </body>

  </html>
 




 

  <script src="../js/menu.js"></script>


  <script type="text/javascript">
		$(document).ready(function(){
			$('#ventaProductosBtn').click(function(){
				esconderSeccionVenta();
				$('#ventaProductos').load('ventas/ventasDeProductos.php');
				$('#ventaProductos').show();
			});
			$('#ventasHechasBtn').click(function(){
				esconderSeccionVenta();
				$('#ventasHechas').load('ventas/ventasyReportes.php');
				$('#ventasHechas').show();
			});
		});

		function esconderSeccionVenta(){
      //Propiedad para ocultar sección.
			$('#ventaProductos').hide();
			$('#ventasHechas').hide();
		}

	</script>

<?php
} else {
  header("location:../index.php");
}

?>