<?php


session_start();

include 'bd/conexion.php';

if (isset($_POST)) {

$id=isset($_POST['id']) ? $_POST['id']:false;
$nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']): false;
$apellido=isset($_POST['apellido']) ? mysqli_real_escape_string($conexion,$_POST['apellido']):false;
$email=isset($_POST['email']) ? mysqli_real_escape_string($conexion,$_POST['email']):false;



$sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',email='$email' WHERE id='$id' "; 

$modificar=$conexion->query($sql);



if ($modificar) {
	
	$_SESSION['completado']='El Usuario Ha Sido Actualizado Correctamente';
	header('location:index.php');


}else{

	$_SESSION['error-general']='No Se Pudo Modificar El Usuario';
	header('location:editar.php');

}






}





 ?>