<?php 
	$conexion=mysqli_connect('localhost','oscar','oscar','hotelinking');


	$uuid = $_POST['uuid'];
	

	$sql="UPDATE codes
			SET status = 0 WHERE $uuid";
	echo mysqli_query($conexion,$sql);
 ?>