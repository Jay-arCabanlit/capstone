<?php 
include "connect/connection.php";
global $connection;

/**
 * 
 */
class GetIp
{
	
function GetIpAdd() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

function cartcount(){
global $connect;
$gitclass = new GetIp; 
$gitIp = $gitclass->GetIpAdd();
$sth = $connect->prepare("SELECT * FROM cart where ip_add = '$gitIp'");
$sth->execute();
$row_count = $sth->rowCount();
// echo $row_count;
}	

function CartDetails(){
	global $connect;
	$gitIpClass = new GetIp; 
	$gitIp = $gitIpClass->GetIpAdd();
	$sth = $connect->prepare("SELECT * FROM cart where ip_add = '$gitIp'");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_OBJ);
	return $result;
}
}



 ?>