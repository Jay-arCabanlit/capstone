<?php 
include "/connect/connection.php";
class viewallproducts{

	function poultry(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '17'");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}

	function livestock(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '18'");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}

	function vegetable(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '19' LIMIT 0,4");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}

	function fruits(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM  products WHERE cat_id = '20' LIMIT 0,4");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
	}


}

 ?>