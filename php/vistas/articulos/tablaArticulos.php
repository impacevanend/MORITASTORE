<?php
require_once "../../clases/Conexion.php";
$c = new conectar();
$conexion = $c->conexion();
$sql = "SELECT art.nombre,
					art.descripcion,
					art.cantidad,
					art.precio,
					img.ruta,
					cat.nombreCategoria,
					art.id_producto
		  from articulos as art 
		  inner join imagenes as img
		  on art.id_imagen=img.id_imagen
		  inner join categorias as cat
		  on art.id_categoria=cat.id_categoria";
$result = mysqli_query($conexion, $sql);

?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>Imagen</td>
            <td>Categoría</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <?php while ($ver = mysqli_fetch_row($result)) : ?>
        <tbody>
            <tr>
                <td><?php echo $ver[0]; ?></td>
                <td><?php echo $ver[1]; ?></td>
                <td><?php echo $ver[2]; ?></td>
                <td><?php echo $ver[3]; ?></td>
                <td>
                    <?php
                    $imgVer = explode("/", $ver[4]);
                    $imgruta = $imgVer[1] . "/" . $imgVer[2] . "/" . $imgVer[3];
                    ?>
                    <img width="50" height="50" src="<?php echo $imgruta ?>">
                <td><?php echo $ver[5]; ?></td>
                <td>
                    <span class="btn btn-primary"  data-toggle="modal" data-target="#abremodalUpdateArticulo" class=" btn-sm" onclick="agregaDatosArticulo('<?php echo $ver[6] ?>')">
                        <a><i class="fa fa-pencil"></i></a>
                    </span>
                </td>
                <td>
                    <span class=" btn-sm">

                        <button class="btn btn-success me-md-1" type="button"><i class="far fa-trash-alt"></i></button>

                    </span>
                </td>
            </tr>
        </tbody>
    <?php endwhile; ?>
</table>