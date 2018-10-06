<?php
include "../connect/connection.php";

class users_info {

		function AllUsers(){
		global $connect;
		$query = $connect->prepare("SELECT * FROM users order by users_id");
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

}

 ?>