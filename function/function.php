<?php 
// include "connect/connection.php";
class users {
	//login
	function getdata($user, $password){
		global $connect;
		if ($user=='admin') {
			$query = $connect->prepare("Select * from admin WHERE username = ? AND password = ?");
			$query->bindParam(1,$user);
			$query->bindParam(2,$password);

			if ($query->execute()) {
				if ($query->rowCount() > 0) {
					return true;
					# code...
				}
				else{
					false;
				}
				# code...
			}
			# code...
		}

		else{
			$query = $connect->prepare("Select * From users WHERE username = ? AND password = ?");
			$query->bindParam(1,$user);
			$query->bindParam(2,$password);
			if ($query->execute()) {
				if ($query->execute() > 0) {
					return true;

					# code...
				}
				else{
					false;
				}
				# code...
			}

		}

	}


	// function AllUsers(){
	// 	global $connect;
	// 	$query = $connect->prepare("SELECT * FROM users order by users_id");
	// 	$query->execute();
	// 	$result = $query->fetchAll(PDO::FETCH_ASSOC);
	// 	return $result;
	// }



}
class CRUD{
	function get_user($id){
		global $connect;
		$query = $connect->prepare("SELECT * FROM users WHERE users_id = ?");
		$query->bindParam(1,$id);
		$query->execute();
		$results = $query->fetch(PDO::FETCH_OBJ);
		return $results;
	}
	function getproduct_by_id($id){
		global $connect;
		$query = $connect->prepare("SELECT * FROM products WHERE pro_id = :id");
		$query->bindValue('id',$id);
		$query->execute();
		$results = $query->fetch(PDO::FETCH_OBJ);
		return $results;

	}
	function get_user_profile($id){
		global $connect;
		$query = $connect->prepare("SELECT * FROM users WHERE users_id = :id");
		$query->bindValue('id',$id);
		$query->execute();
		$results = $query->fetch(PDO::FETCH_OBJ);
		return $results;
	}
}




 ?>