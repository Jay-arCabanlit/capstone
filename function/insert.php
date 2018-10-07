<?php 
include '../connect/connection.php';
global $connect;

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$pro_name = $_POST['pro_name'];
	$description = $_POST['description'];
	$availability = $_POST['availability'];
	$pro_price = $_POST['pro_price'];



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
  		echo "<script>
				alert('Successfully Updated!');
				window.location.href='../user_profile.php';
				</script>";
	}
	else{
		echo "SHINESS";
	}

}
if (isset($_POST['update_profile'])) {
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$bday = $_POST['bday'];
	$address = $_POST['address'];
	$id_type = $_POST['id_type'];



	$query = $connect->prepare("UPDATE users SET
						 Fname = :firstname,
						 Lname = :lastname,
						 username = :username,
						 password = :password,
						 Bday = :bday,
						 Address = :address,
						 id_type = :id_type
             WHERE users_id = :id ");

  $query->bindValue('id',$id);
  $query->bindValue('firstname',$firstname);
  $query->bindValue('lastname',$lastname);
  $query->bindValue('username',$username);
  $query->bindValue('password',$password);
  $query->bindValue('bday',$bday);
  $query->bindValue('address',$address);
  $query->bindValue('id_type',$id_type);
	if ($query->execute()) {
  		echo "<script>
				alert('Successfully Updated!');
				window.location.href='../user_profile.php';
				</script>";
	}
	else{
		echo "SHINESS";
	}

}


 ?>