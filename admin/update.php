<?php 
session_start();
include "../connect/connection.php";
global $connect;

if (isset($_POST['edit'])) {
	# code...
	$CatId = $_POST['id'];
	$Category = $_POST['category'];

	$editquery = $connect->prepare("UPDATE `main_cat` SET `cat_name` = '$Category' WHERE `cat_id` = $CatId ");
if ($editquery->execute()) {
	# code...
	echo "success";
}else{
	echo "error";
}
}

if (isset($_POST['update'])) {

	$CatID = $_POST['catid'];
	$SubCatName = $_POST['subcatname'];
	$MainCat = $_POST['maincat'];

	$updatequery = $connect->prepare("UPDATE `sub_cat` SET `sub_cat_name` = '$SubCatName', `cat_id` = '$MainCat' WHERE `sub_cat_id` = $CatID ");
// var_dump($updatequery);
	if ($updatequery->execute()) {
		echo "succes";
		# code...
	}else{
		echo "error";
	}

}

if (isset($_POST['update_product'])) {

	$ProId = $_POST['proid'];
	$UpdateName = $_POST['updatename'];
	$UpdateCatId = $_POST['updatecatid'];
	$UpdateSubCat = $_POST['updatesubcat'];
	$UpdateImgOne = $_FILES['updateimgone'] ['name'];
		$UpdateImgOne_tmp = $_FILES['updateimgone'] ['tmp_name'];
	$UpdateImgTwo = $_FILES['updateimgtwo'] ['name'];
		$UpdateImgTwo_tmp = $_FILES['updateimgtwo'] ['tmp_name'];
	$UpdateImgTree = $_FILES['updateimgtree'] ['name'];
		$UpdateImgTree_tmp = $_FILES['updateimgtree'] ['tmp_name'];
	$UpdateImgFour = $_FILES['updateimgfour'] ['name'];
		$UpdateImgFour_tmp = $_FILES['updateimgfour'] ['tmp_name'];
	$UpdateFeatureOne = $_POST['updatefeatureone'];
	$UpdateFeatureTwo = $_POST['updatefeaturetwo'];
	$UpdateFeatureTree = $_POST['updatefeaturetree'];
	$UpdateFeatureFour = $_POST['updatefeaturefour'];
	$UpdateFeatureFive = $_POST['updatefeaturefive'];
	$UpdatePrice = $_POST['updateprice'];
	$UpdateModel = $_POST['updatemodel'];
	$UpdateKeyword = $_POST['updatekeyword'];
	// $time  = $_POST['time'];

	move_uploaded_file($UpdateImgOne_tmp,"../img/$UpdateImgOne");
	move_uploaded_file($UpdateImgTwo_tmp,"../img/$UpdateImgTwo");
	move_uploaded_file($UpdateImgTree_tmp,"../img/$UpdateImgTree");
	move_uploaded_file($UpdateImgFour_tmp,"../img/$UpdateImgFour");


	// $update_product = $connect->prepare("UPDATE `products` SET `pro_name` = '$UpdateName', `cat_id` = '$UpdateCatId', `sub_cat_id` = '$UpdateSubCat', `pro_img1` = '$UpdateImgOne', `pro_img2` = '$UpdateImgTwo', `pro_img3` = 'UpdateImgTree', `pro_img4` = 'UpdateImgFour', `availability` = '$UpdateFeatureOne', `pro_feature2` = '$UpdateFeatureTwo', `pro_feature3` = '$UpdateFeatureTree', `pro_feature4` = '$UpdateFeatureFour', `pro_feature5` = '$UpdateFeatureFive', `pro_price` = '$UpdatePrice', `pro_model` = '$UpdateModel', `pro_keyword` = '$UpdateKeyword' WHERE `pro_id` = $ProId ");

	$update_product = $connect->prepare("UPDATE `products` SET `pro_name` = '$UpdateName', `cat_id` = '$UpdateCatId', `sub_cat_id` = '$UpdateSubCat', `pro_img1` = '$UpdateImgOne', `pro_img2` = '$UpdateImgTwo', `pro_img3` = '$UpdateImgTree', `pro_img4` = '$UpdateImgFour', `availability` = '$UpdateFeatureOne', `pro_feature2` = 'UpdateFeatureTwo', `pro_feature3` = '$UpdateFeatureTree', `pro_feature4` = '$UpdateFeatureFour', `pro_feature5` = '$UpdateFeatureFive', `pro_price` = '$UpdatePrice', `pro_model` = '$UpdateModel', `pro_keyword` = '$UpdateKeyword', `pro_added_date` = NOW() WHERE `pro_id` = $ProId");

	if ($update_product->execute()) {
		echo "finish";
		# code...
	}else{
		echo "error";
	}


	# code...
}


 ?>