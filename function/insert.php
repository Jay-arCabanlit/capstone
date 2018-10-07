<?php 
include '../connect/connection.php';
global $connect;

if (isset($_POST['update'])) {
	echo $id = $_POST['id'];
	echo $pro_name = $_POST['pro_name'];
	echo $description = $_POST['description'];
	echo $availability = $_POST['availability'];
	echo $pro_price = $_POST['pro_price'];



	$query = $connect->prepare("UPDATE products SET
						 pro_name = :pro_name,
						 description = :description,
						 availability = :availability,
						 pro_price = :pro_price
             WHERE pro_id = :pro_id ");

  $query->bindValue('pro_id',$id);
  $query->bindValue('pro_name',$pro_name);
  $query->bindValue('description',$description);
  $query->bindValue('availability',$availability);
  $query->bindValue('pro_price',$pro_price);
	if ($query->execute()) {
  	header('Location:../user_profile.php');

	}
	else{
		echo "SHINESS";
	}

}


 ?>