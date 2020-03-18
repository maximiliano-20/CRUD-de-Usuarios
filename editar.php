<?php session_start() ?>
<?php require 'bd/conexion.php';?>
<?php require_once 'funciones/funcion.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<?php $editar=editar($conexion,$_GET['id'])?>
<div class="container">
<div class="col-md-9">
<h3 class="text-center mt-3">Actualizar Usuarios</h3>	
<form action="modificar.php" method="POST">
<input type="hidden" name="id" value="<?=$editar['id']?>">
<div class="form-group">
<label>Nombre Del Usuario</label>
<input type="text" name="nombre" class="form-control" value="<?=$editar['nombre']?>">	
</div>
<div class="form-group">
<label>Apellido del Usuario</label>
<input type="text" name="apellido" class="form-control" value="<?=$editar['apellido']?>">
<div>
<div class="form-group">
<label>Email Del Usuario</label>
<input type="email" name="email" class="form-control" value="<?=$editar['email']?>">	
</div>	
<input class="btn btn-info btn-block" type="submit" name="" value="Modificar">
</form>
</div>
</div>
</body>
</html>