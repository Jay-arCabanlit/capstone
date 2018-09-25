<?php 
include "connect/connection.php";
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



}





 ?>