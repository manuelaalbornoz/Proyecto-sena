<?php
	session_start();
	sesion_destroy();
	header("location: login.php");
?>