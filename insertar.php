<?php

session_start();

include 'bd/conexion.php';

if (isset($_POST)) {
 	# code...
 

$nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']):false;
$apellido=isset($_POST['apellido']) ? mysqli_real_escape_string($conexion, $_POST['apellido']):false;
$email=isset($_POST['email']) ? mysqli_real_escape_string($conexion,$_POST['email']):false;


$errores=array();



if (!empty($nombre)) {
	# code...
}else{

	$errores['nombre']='El Campo Nombre Esta Vacio';
}

if (!empty($apellido)) {
	# code...
}else{

	$errores['apellido']='El Campo Apellido Esta Vacio';
}

if (!empty($email)) {
	# code...
}else{

	$errores['email']='El Campo Email Esta Vacio';
}


	# code...




if (count($errores)==0) {


$sql="INSERT INTO usuarios VALUES (null,'$nombre','$apellido','$email')";

$insertar=$conexion->query($sql);


  if ($insertar) {
  	
  	$_SESSION['completado']='El Usuario Ha Sido Agregado';
  	header('Location:index.php');


  }else{

  	$_SESSION['error-general']='No Se Ha Podido Eliminar El Usuario';
  	header('Location:crear.php');

  }




   }else{


   	$_SESSION['errores']=$errores;
   	header('Location:crear.php');




   }





}






 ?>