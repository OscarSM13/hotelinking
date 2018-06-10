<?php 
    $conexion=mysqli_connect('localhost','oscar','oscar','hotelinking');
    
    $uuid= rand(1, 100000000);

	
	$sql="INSERT into codes (uuid, user_id)
			values (". $uuid . " ,1)";
	echo mysqli_query($conexion,$sql);
 ?>