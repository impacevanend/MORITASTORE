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
                <li class="breadcrumb-item h5">Clientes</li>
                <a class="breadcrumb-item active" href="categoria.html" aria-current="page">Home</a>
                <a class="breadcrumb-item active alert-link" href="categoria.html">Clientes</a>
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
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
              <form id="frmClientes">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="apellidos" name="apellidos">
						<label>Direccion</label>
						<input type="text" class="form-control input-sm" id="direccion" name="direccion">
						<label>Email</label>
						<input type="text" class="form-control input-sm" id="email" name="email">
						<label>Telefono</label>
						<input type="text" class="form-control input-sm" id="telefono" name="telefono">
						<label>NIT</label>
						<input type="text" class="form-control input-sm" id="nit" name="nit">
						<p></p>
						<span class="btn btn-primary" id="btnAgregarCliente">Agregar</span>
					</form>
              </div>
              <div class="col-sm-8">
                <div id="tablaClientesLoad"></div>
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
    <div class="modal fade" id="abremodalClientesUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualizar cliente</h4>
					</div>
					<div class="modal-body">
						<form id="frmClientesU">
							<input type="text" hidden="" id="idclienteU" name="idclienteU">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" id="apellidosU" name="apellidosU">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" id="direccionU" name="direccionU">
							<label>Email</label>
							<input type="text" class="form-control input-sm" id="emailU" name="emailU">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
							<label>NIT</label>
							<input type="text" class="form-control input-sm" id="NITU" name="NITU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnAgregarClienteU" type="button" class="btn btn-primary" data-dismiss="modal">Actualizar</button>

					</div>
				</div>
			</div>
		</div>
  

  </body>

  </html>

  <script type="text/javascript">
		function agregaDatosCliente(idcliente){

			$.ajax({
				type:"POST",
				data:"idcliente=" + idcliente,
				url:"../procesos/clientes/obtenDatosCliente.php",
				success:function(r){
					dato=jQuery.parseJSON(r);
					$('#idclienteU').val(dato['id_cliente']);
					$('#nombreU').val(dato['nombre']);
					$('#apellidosU').val(dato['apellido']);
					$('#direccionU').val(dato['direccion']);
					$('#emailU').val(dato['email']);
					$('#telefonoU').val(dato['telefono']);
					$('#NITU').val(dato['NIT']);

				}
			});
		}

		function eliminarCliente(idcliente){
			alertify.confirm('¿Desea eliminar este cliente?', function(){ 
				$.ajax({
					type:"POST",
					data:"idcliente=" + idcliente,
					url:"../procesos/clientes/eliminarCliente.php",
					success:function(r){
						if(r==1){
							$('#tablaClientesLoad').load("clientes/tablaClientes.php");
							alertify.success("¡Cliente eliminado con exito!");
						}else{
							alertify.error("No se pudo eliminar cliente");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo !')
			});
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#tablaClientesLoad').load("clientes/tablaClientes.php");

			$('#btnAgregarCliente').click(function(){

				vacios=validarFormVacio('frmClientes');

				if(vacios > 0){
					alertify.alert("¡Debes llenar todos los campos!");
					return false;
				}

				datos=$('#frmClientes').serialize();

				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/clientes/agregaCliente.php",
					success:function(r){

						if(r==1){
							$('#frmClientes')[0].reset();
							$('#tablaClientesLoad').load("clientes/tablaClientes.php");
							alertify.success("¡Cliente agregado con exito!");
						}else{
							alertify.error("¡No se pudo agregar cliente!");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnAgregarClienteU').click(function(){
				datos=$('#frmClientesU').serialize();

				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/clientes/actualizaCliente.php",
					success:function(r){

						if(r==1){
							$('#frmClientes')[0].reset();
							$('#tablaClientesLoad').load("clientes/tablaClientes.php");
							alertify.success("¡Cliente actualizado con exito!");
						}else{
							alertify.error("¡No se pudo actualizar cliente!");
						}
					}
				});
			})
		})
	</script>



  <script src="../js/menu.js"></script>

<?php
} else {
  header("location:../index.php");
}

?>