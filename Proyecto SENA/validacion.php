<?php 
	include("conexion.php");
	session_start();
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$sql = "SELECT * FROM usuarios where nombre='$nombre' AND apellido='$apellido'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_assoc();
	if($row['nombre'] == $nombre && $row['apellido'] == $apellido){
        $_SESSION['nombre'] == $nombre;
       
        Header("Location: bienvenido.php");
    }else{
        Header("Location: login.php");
    }
?>