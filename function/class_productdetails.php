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
  //
  $sth3 = $connect->prepare("SELECT * FROM product_review where pro_id = ?");
  $sth3->bindParam(1,$results->pro_id);
  $sth3->execute();
  $results->productreview = $sth3->fetchAll(PDO::FETCH_ASSOC);

  $sth4 = $connect->prepare("SELECT * FROM users where users_id = ?");
  $sth4->bindParam(1,$results->users_id);
  $sth4->execute();
  $results->user = $sth4->fetch(PDO::FETCH_OBJ);
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
function DisplayAllProducts($id){
	global $connect;
	$query = $connect->prepare("SELECT * FROM products WHERE cat_id = ?");
 	 $query->bindParam(1,$id);
  	$query->execute();
  	$results = $query->fetchAll(PDO::FETCH_ASSOC);
 	 return $results;

}
}

 ?>