<?php 
include("conexion.php");
if (isset($_POST['register'])){
	if(strlen($_POST['nombre']) >= 1 && 
		strlen($_POST['apellido']) >= 1 && 
		strlen($_POST['correo']) >= 1 &&
		strlen($_POST['telefono'])){
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
		$consulta = "INSERT INTO usuarios(nombre, apellido, email, telefono) VALUES ('$nombre','$apellido','$correo',$telefono)";
		$resultado = mysqli_query($conexion,$consulta);
		if ($resultado){
			echo '<script type="text/javascript">
			alert("TUS DATOS HAN SIDO ALMACENADOS CORRECTAMENTE");
			window.location.href="index.php";
			</script>';
		} else{
			echo '<script type="text/javascript">
			alert("ERROR AL REGISTRAR LOS DATOS");
			window.location.href="index.php";
			</script>';
			
		}
	}else {
		echo '<script type="text/javascript">
			alert("COMPLETE LOS CAMPOS");
			window.location.href="index.php";
			</script>';
	}
}

?>