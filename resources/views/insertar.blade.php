<?php 
    $conexion=mysqli_connect('localhost','oscar','oscar','hotelinking');
    
    $uuid= rand(1, 100000000);

	$sql="INSERT into code (uuid)
			values ('$uuid')";
	echo mysqli_query($conexion,$sql);
 ?>