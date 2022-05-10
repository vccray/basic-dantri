<?php 
session_start();

if (isset($_COOKIE['remember'])) {
	$token = $_COOKIE['remember'];
	require 'admin/connect.php';
	$sql = "select * from customers where token = '$token' limit 1";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	$num_row = mysqli_num_rows($result);
	if ($num_row == 1) {	
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];
	}
}

if (isset($_SESSION['id'])) {
	header('location:user.php');
	exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action = "process_signin.php">
		<h1>VCC Store</h1>
		Email
		<input type="email" name="email"> <br>
		Password
		<input type="password" name="pass"> <br>
		Remember me
		<input type="checkbox" name="remember"> <br>
		<button>Log in</button>
	</form>
</body>
</html>