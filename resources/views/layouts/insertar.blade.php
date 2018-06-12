<?php 
	$conexion=mysqli_connect('localhost','oscar','oscar','hotelinking');
	
    $user_id = $_POST['user_id'];
	$uuid= rand(1, 100000000);

	
	$sql="INSERT into codes (uuid, user_id)
			values (". $uuid . " ,". $user_id.")";
	echo mysqli_query($conexion,$sql);
 ?>