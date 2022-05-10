<?php 

$email= $_POST['email'];
$pass= $_POST['pass'];
if (isset($_POST['remember'])) {
	$remember = true;
} else
	$remember = false;
require 'admin/connect.php';
$sql = "select * from customers
where email = '$email' and pass = '$pass'";

$result = mysqli_query($connect,$sql);
$number_row = mysqli_num_rows($result);

if ($number_row == 1) {
	echo "Dang nhap thanh cong";
	session_start();
	$each = mysqli_fetch_array($result);
	$id = $each['id'];
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];

	if ($remember) {
		$token = uniqid('user_',true);
		$sql = "update customers
		set token = '$token'
		where id = '$id'";
		mysqli_query($connect,$sql);
		setcookie('remember', $id, time() + 86400 * 30);
	}

	header('location:user.php');
	exit;
}
header('location:index.php?error = Sai ten dang nhap va mat khau');
