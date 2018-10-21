<?php 
// include "../connect/connection.php";
class products {
	function viewcat(){
	global $connect;
	// $db = connect();
	$query = $connect->prepare("SELECT * FROM  main_cat ORDER BY cat_name ASC");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}
function viewsubcat(){
	global $connect;
	// $db = connect();
	$query = $connect->prepare("SELECT * FROM  sub_cat");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}

function viewmaincat(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM main_cat");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}
function viewsubcategory(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM sub_cat ORDER BY sub_cat_name");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}
function viewallproduct(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM products");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}

function editcat($id) {
global $connect;
  $sth = $connect->prepare("SELECT * From main_cat WHERE cat_id = ?");
  $sth->bindParam(1,$id);
  $sth->execute();
  $results = $sth->fetch(PDO::FETCH_OBJ);
  return $results;
}

function editsubcat($id) {
global $connect;
  $sth = $connect->prepare("SELECT * From sub_cat WHERE sub_cat_id = ?");
  $sth->bindParam(1,$id);
  $sth->execute();
  $results = $sth->fetch(PDO::FETCH_OBJ);
  return $results;
}

function editproduct($id) {
global $connect;
  $sth = $connect->prepare("SELECT * From products WHERE pro_id = ?");
  $sth->bindParam(1,$id);
  $sth->execute();
  $results = $sth->fetch(PDO::FETCH_OBJ);
  return $results;
}


}

 ?>