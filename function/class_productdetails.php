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
	$sth = $connect->prepare("SELECT * From products");
	$sth->execute();
	$results = $sth->fetch(PDO::FETCH_OBJ);
}
}

 ?>