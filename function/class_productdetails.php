<?php 
include "../connect/connection.php";
class ViewProductDetails {

function AllProductDetails($id) {
global $connect;
  $sth = $connect->prepare("SELECT * From products WHERE pro_id = ?");
  $sth->bindParam(1,$id);
  $sth->execute();
  $results = $sth->fetch(PDO::FETCH_OBJ);
  return $results;
}
function DisplayAllProducts(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM products order by pro_id"); 
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}
}

 ?>