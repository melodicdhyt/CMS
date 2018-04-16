<?php 
include 'db.php';
if (isset($_POST['send']))
 {
	$userlogin = $_POST['user_login'];
	$userpass = $_POST['user_pass'];
	$username = $_POST['user_name'];

	
	$sql = "insert into user (user_login,user_pass,user_name) values ('$userlogin','$userpass','$userpass')";

$val = $db -> query($sql);

if ($val){

	header('location:index.php');
}

}

 ?>