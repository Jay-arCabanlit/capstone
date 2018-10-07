<?php 	
include "../connect/connection.php";

class search {

	function SearchProducts($search){
		global $connect;

			$query = $connect->prepare("SELECT * FROM products where pro_name like ?");
			$query->bind_param(1,"%$search%");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			$query->execute();
			return $result;
		}
	}
}

 ?>