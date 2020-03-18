<?php require_once 'funciones/funcion.php';?>
<?php  session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<div class="container">
<div class="col-md-9">
<?php if (isset($_SESSION['error-general'])): ?>
<div class="alert alert-danger text-center  mt-3"><?=$_SESSION['error-general']?></div>	
<?php endif ?>	
<h3 class="text-center mt-1">Agregar un Usuario</h3>	
<form action="insertar.php" method="POST">
<div class="form-group">	
<label>Ingrese El Nombre</label>
<input type="text" class="form-control" name="nombre" placeholder="Nombre" >
<?php echo isset($_SESSION['errores']) ? errores($_SESSION['errores'],'nombre') :'' ?>
</div>	
<div class="form-group">
<label>Ingrese El Apellido</label>
<input type="text" name="apellido" class="form-control" placeholder="Apellido" >
<?php echo isset($_SESSION['errores']) ? errores($_SESSION['errores'],'apellido') :'' ?>
</div>
<div class="form-group">
<label>Ingrese El Email</label>
<input type="email" name="email" class="form-control" placeholder="Email">
<?php echo isset($_SESSION['errores']) ? errores($_SESSION['errores'],'email') :'' ?>
</div>
<input class="btn btn-info btn-block" type="submit" name="" value="Insertar">
</form>
<?php borrar()  ?>
</div>
</div>
</body>
</html>