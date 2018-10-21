<?php 	
include "../connect/connection.php";

class search {

	function SearchProducts(){
		global $connect;

		if (isset($_GET['search'])) {
			# code...
			$GetSearch = $_GET['searchall'];

			$query = $connect->prepare("SELECT * FROM products where pro_name like '%$GetSearch%'");
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;

			echo "$result";
		}
	}
}

 ?>