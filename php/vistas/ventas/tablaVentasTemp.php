<?php 

	session_start();
	//print_r($_SESSION['tablaComprasTemp']);
 ?>

 <h4>Hacer venta</h4>
 <h4><strong><div id="nombreclienteVenta"></div></strong></h4>
 <table class="table table-bordered table-hover table-condensed" style="text-align: center;">
 	<caption>
 		<span class="btn btn-success btn-md" onclick="crearVenta()"> 
 			<span class="fas fa-dollar-sign"></span> Hacer venta 
 		</span>
 	</caption>
 	<tr>
 		<td>Nombre</td>
 		<td>Descripcion</td>
 		<td>Precio</td>
 		<td>Cantidad</td>
 		<td>Quitar</td>
 	</tr>
 	<?php 
 	$total=0;//esta variable tendra el total de la compra en dinero
 	$cliente=""; //en esta se guarda el nombre del cliente
 		if(isset($_SESSION['tablaComprasTemp'])):
 			$i=0;

			 //@Quita los warning si está vacio.
 			foreach (@$_SESSION['tablaComprasTemp'] as $key) {

 				$d=explode("||", @$key);
 	 ?>

 	<tr>
 		<td><?php echo $d[1] ?></td>
 		<td><?php echo $d[2] ?></td>
 		<td><?php echo $d[3] ?></td>
 		<td><?php echo 1; ?></td>
 		<td>
 			<span class="btn btn-danger btn-xs" onclick="quitarP('<?php echo $i; ?>')">
 				<span class="fas fa-trash-alt"></span>
 			</span>
 		</td>
 	</tr>

 <?php 
		//Acumulador calculo de precio 
 		$total=$total + $d[3];

		//indice
 		$i++;

 		$cliente=$d[4];
 	}
 	endif; 
 ?>

 	<tr>
 		<td>Total de venta: <?php echo "$".$total; ?></td>
 	</tr>

 </table>


 <script type="text/javascript">
 	$(document).ready(function(){
 		nombre="<?php echo @$cliente ?>";
 		$('#nombreclienteVenta').text("Nombre de cliente: " + nombre);
 	});
 </script>