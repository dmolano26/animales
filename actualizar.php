<?php
//incluye la clase Animal y CrudAnimal
	require_once('crud_animal.php');
	require_once('animal.php');
	$crud= new CrudAnimal();
	$animal=new Animal();
	//busca el animal utilizando el id, que es enviado por GET desde la vista mostrar.php
	$animal=$crud->obtenerAnimal($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Animal</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<form action='administrar_animal.php' method='post'>
	<table class="table table-bordered table-striped">
		<tr>
			<input type='hidden' name='id' value='<?php echo $animal->getId()?>'>
			<td>Nombre animal:</td>
			<td> <input type='text' name='nombre' value='<?php echo $animal->getNombre()?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>