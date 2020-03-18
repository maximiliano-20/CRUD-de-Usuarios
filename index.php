<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
	<?php require_once 'bd/conexion.php';?>
  <?php require_once 'funciones/funcion.php';?>

  <div class="container mt-4">
  <div class="col-md-12"> 
   <?php if (isset($_SESSION['completado'])): ?>
     <div class=" alert alert-success text-center"><?=$_SESSION['completado']?></div>
   <?php elseif (isset($_SESSION['error-general'])) : ?>
    <div class=" alert alert-success text-center"><?=$_SESSION['error-general']?></div>
   <?php endif ?> 
  <h3 class="text-center">Lista de Productos</h3>
  <a class="btn btn-outline-info mb-2" href="crear.php">Agregar Usuarios</a>
  <table class="table table-bordered">
  	<th>Nombre</th>
  	<th>Apellido</th>
    <th>Email</th>
  	<th>Acciones</th>
  <?php $mostrar=mostrar($conexion)  ?>
  <?php if (!empty($mostrar)): ?>
  <?php while ($fila=mysqli_fetch_array($mostrar)) : ?>
  	<tr>
  		<td><?=$fila['nombre']?></td>
  		<td><?=$fila['apellido']?></td>
      <td><?=$fila['email']?></td>
  		<td>
  		<a class="btn btn-outline-warning " href="editar.php?id=<?=$fila['id']?>">Editar</a>
        <a class="btn btn-outline-danger " href="eliminar.php?id=<?=$fila['id']?>">Eliminar</a>
  		</td>
  	</tr>
  <?php
   endwhile; 
    endif;
  ?>	
  </table>
  <?php borrar() ?>
</div>
</div>
</body>
</html>