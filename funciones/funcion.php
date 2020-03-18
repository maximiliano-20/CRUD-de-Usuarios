<?php

function errores($errores,$campo){

	$alerta='';

	if (!empty($errores[$campo]) && isset($campo)) {
		
		$alerta='<pre class="text-danger">'.$errores[$campo].'</pre>';
	}

	return $alerta;
}



function borrar(){

	$borrado=false;
	if (isset($_SESSION['errores'])) {
		$_SESSION['errores']=null;
		$borrado=true;
	}


	$borrado=false;

	if (isset($_SESSION['error-general'])) {
		$_SESSION['error-general']=null;
		$borrado=true;
	}

	$borrado=false;

	if (isset($_SESSION['completado'])) {
		$_SESSION['completado']=null;
		$borrado=true;


   }




}





function mostrar($conexion){

	$sql="SELECT * FROM usuarios ORDER BY id DESC";
	$mostrar=mysqli_query($conexion,$sql);
	$resultado=array();

	if ($mostrar && mysqli_num_rows($mostrar)>=1) {
		
		$resultado=$mostrar;

	}

	return $resultado;

}



function editar($conexion,$id){
$sql="SELECT * FROM usuarios WHERE id ='$id'";
$editar = $conexion->query($sql);

$resultado=array();
if ($editar && mysqli_num_rows($editar) >=1 ) {
	
	$resultado=mysqli_fetch_array($editar);
}

return $resultado;


  
}




 ?>