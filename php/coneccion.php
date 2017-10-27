<?php  
	$coneccion =  mysqli_connect('localhost','alvaro','123456','registro');

	if($coneccion){
		echo'Conexxion exitosa';
	}
	else{
		echo'no exitosa';
	}
?>