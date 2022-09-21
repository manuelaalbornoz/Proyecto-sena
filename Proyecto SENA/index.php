<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<title>Registro</title>
	<style>
		body {
			background-image: url(../img/mora.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
	</style>
</head>
<body>	 
<center><font face="Arial" color="#000000"><h1>Registro Mangel</h1></font>
			<font face="Arial" color="#000000"><center><p>Mereces lo mejor :3</p>
			<img src="../img/icono1.png" alt="Logo" class="mx-auto d-block" style="width:250px;">
		</div>
		<br>
	
	<form method="post" action="registro.php">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="password" name="apellido" placeholder="Clave">
		<input type="email" name="correo" placeholder="Correo">
		<input type="number" name="telefono" placeholder="Telefono">
		<input type="submit" name="register">
	</form>
	<br>
	<h3>¿ya te has registrado? <a href="login.php"> inicia sesion.</a> </h3>
</body>
</html>