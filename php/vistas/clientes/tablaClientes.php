<div class="table-responsive">

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
<caption><label>Clientes</label></caption>
<tr>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Dirección</td>
    <td>Teléfono</td>
    <td>NIT</td>
    <td>Editar</td>
    <td>Eliminar</td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#actualizaCategoria" onclick="agregaDato('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaCategoria('<?php echo $ver[0] ?>')">
				<span class="far fa-trash-alt"></span>
			</span>
		</td>
</tr>

</table>


</div>