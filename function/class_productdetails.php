<?php 
include "../connect/connection.php";
class ViewProductDetails {

function AllProductDetails($id) {
global $connect;
  $sth = $connect->prepare("SELECT * From products WHERE pro_id = ?");
  $sth->bindParam(1,$id);
  $sth->execute();
  $results = $sth->fetch(PDO::FETCH_OBJ);
  // return $results->cat_id;
  $sth2 = $connect->prepare(" SELECT * FROM `products` WHERE cat_id = ?");
  $sth2->bindParam(1,$results->cat_id);
  $sth2->execute();
  // return $sth2->fetchAll(PDO::FETCH_ASSOC);
  $results->related_products = $sth2->fetchAll(PDO::FETCH_ASSOC);
  return $results;


}
// function related_products(){
// 	global $connect;
// 	$details =  return AllProductDetails();
// 	$view = $details->pro_id;
// 	$sth = $connect->prepare("SELECT * FROM products WHERE cat_id = '$view'");
// $sth->execute();
//   $results = $sth->fetch(PDO::FETCH_OBJ);
//   return $results;
// SELECT * FROM `products` INNER JOIN `main_cat` on products.cat_id = main_cat.cat_id WHERE products.pro_id = ?



// }
function DisplayAllProducts(){
	global $connect;
	$query = $connect->prepare("SELECT * FROM products order by pro_id"); 
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_OBJ);
	return $result;
}
}

 ?>