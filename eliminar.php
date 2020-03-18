<?php

session_start();

include 'bd/conexion.php';


$id=$_GET['id'];
$nombre=isset($_POST['nombre']) ? $_POST['nombre']:false;
$email=isset($_POST['email']) ? $_POST['email']:false;
$genero=isset($_POST['genero']) ? $_POST['genero']:false;


$sql="DELETE FROM usuarios WHERE id = '$id'";
$eliminar=$conexion->query($sql);





if ($eliminar) {
	
	$_SESSION['completado']='El Usuario Ha Sido Eliminado';

}else{

	$_SESSION['error-general']='No Se Ha Podido Eliminar El Producto';
}

header('location:index.php');


















 ?>