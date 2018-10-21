<?php 
session_start();
include "../connect/connection.php";
global $connect;
if (isset($_POST['maincat'])) {
	$CatName = $_POST['catname'];

$main_cat = $connect->prepare("insert into main_cat(cat_name) values ('$CatName')");
if ($main_cat->execute()) {
	echo "<script>window.open('main_category.php','_self');alert('Category Successfully Add');</script>";
	# code...
}else {
	echo "error";
}

	# code...
}
if (isset($_POST['add_cat'])) {
$cat_id = $_POST['catname'];
$SubCatName = $_POST['subcat'];

$add_cat = $connect->prepare("insert into sub_cat(sub_cat_name,cat_id) values ('$SubCatName','$cat_id')");

if ($add_cat->execute()) {

	echo "<script>window.open('sub_category.php','_self');alert('Sub Category Successfully Add');</script>";
} else{
	echo "error";
}

	# code...
}
// Insert product -- users
$id = $_SESSION['login']; // id sa user
if (isset($_POST['add_product'])) {
	$ProName = $_POST['proname'];
	$CatId = $_POST['catid'];
	$SubCat = $_POST['subcat'];
	$ProImgOne = $_FILES['proimgone'] ['name'];
		$ProImgOne_tmp = $_FILES['proimgone'] ['tmp_name'];
	$ProImgTwo = $_FILES['proimgtwo'] ['name'];
		$ProImgTwo_tmp = $_FILES['proimgtwo'] ['tmp_name'];
	$ProImgTree = $_FILES['proimgtree'] ['name'];
		$ProImgTree_tmp = $_FILES['proimgtree'] ['tmp_name'];
	$ProImgFour = $_FILES['proimgfour'] ['name'];
		$ProImgFour_tmp = $_FILES['proimgfour'] ['tmp_name'];
	$ProFeatureOne = $_POST['AvailaBility'];
	$ProPrice = $_POST['proprice'];
	$description = $_POST['description'];


	move_uploaded_file($ProImgOne_tmp,"../img/$ProImgOne");
	move_uploaded_file($ProImgTwo_tmp,"../img/$ProImgTwo");
	move_uploaded_file($ProImgTree_tmp,"../img/$ProImgTree");
	move_uploaded_file($ProImgFour_tmp,"../img/$ProImgFour");

	$add_product = $connect->prepare("insert into products(users_id,pro_name,cat_id,sub_cat_id,pro_img1,pro_img2,pro_img3,pro_img4,availability,description,pro_price,pro_added_date) values ('$id','$ProName','$CatId','$SubCat','$ProImgOne','$ProImgTwo','$ProImgTree','$ProImgFour','$ProFeatureOne','$description','$ProPrice',NOW())");
	// var_dump($add_product);
	// die();

	if ($add_product->execute()) {
		echo "<script>
				alert('Successfully Added!');
				window.location.href='../user_profile.php';
				</script>";

		# code...
	}else{
		echo "<script>window.open('create_product.php','_self')alert('product failed to execute')</script>";
	}


	# code...
}

 ?>