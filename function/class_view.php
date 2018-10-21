<?php 
include "connect/connection.php";
class viewallproducts{

	function poultry(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '37'");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}

	function livestock(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '35'");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}

	function vegetable(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '36' LIMIT 0,4");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}

	function fruits(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '44' LIMIT 0,4");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}


}

 ?>