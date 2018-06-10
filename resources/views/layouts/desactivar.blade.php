<?php 
	$conexion=mysqli_connect('localhost','oscar','oscar','hotelinking');


	$sql="UPDATE codes
			SET status = 0 WHERE id=4";
	echo mysqli_query($conexion,$sql);
 ?>