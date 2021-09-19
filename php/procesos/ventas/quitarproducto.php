<?php 

	session_start();
	$index=$_POST['ind'];
	unset($_SESSION['tablaComprasTemp'][$index]);
	$datos=array_values($_SESSION['tablaComprasTemp']);
	unset($_SESSION['tablaComprasTemp']);
	//Se re-indenxan los valores despues de eliminado el elemento del arreglo.
    $_SESSION['tablaComprasTemp']=$datos;

 ?>