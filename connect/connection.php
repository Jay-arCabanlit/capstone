<?php 
	$connect = new PDO("mysql:localhost=host; dbname=e-agriculture-shop","root","" );
	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $connect;
 ?>