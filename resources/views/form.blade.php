<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	
	<form action="{{url('formulario')}}" method="POST">
		{{csrf_field()}}
		<label for="name">name</label>
		<input type="text" name="nombre">
		<label for="apellido">Apellido</label>
		<input type="text" name="apellido">
		<label for="edad">edad</label>
		<input type="text" name="edad">
		<label for="sexo">Sexo</label>
		<input type="text" name="sexo">
		<label for="telefono">Telefono</label>
		<input type="text" name="telefono">
		<label for="direccion">Direccion</label>
		<input type="text" name="direccion">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>