<?php 
		$conn=mysqli_connect('localhost','canteen','canteen369','canteen_management');
		if(!$conn){
		echo "Connection error".mysqli_connect_error();
		}
