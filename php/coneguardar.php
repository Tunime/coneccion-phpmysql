<?php 
	include('coneccion.php');
	$nombre =$_GET['nombre'];
	$apellido =$_GET['apellido'];
	$email =$_GET['email'];
	$contra =$_GET['contra'];

	$query= "INSERT INTO usuarios(nombre,apellido,email,contraseña) VALUES('$nombre','$apellido','$email','$contra')";
 ?>