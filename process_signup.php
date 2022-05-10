<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

require 'admin/connect.php';
$sql = "select count(*) from customers
where email = '$email'";

$result = mysqli_query($connect,$sql);
$number_row = mysqli_fetch_array($result)['count(*)'];

if ($number_row == 1) {
	header('location:signup.php?error = Email da duoc su dung');
	exit;
}

$sql = "insert into customers (name, email, pass) value ('$name','$email','$pass')";
mysqli_query($connect,$sql);

$sql = "select id from customers
where email = '$email'";
$result = mysqli_query($connect,$sql);
$id = mysqli_fetch_array($result)['id'];


$errorsql = mysqli_error($connect);

session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;
mysqli_close($connect);
if (empty($errorsql)) {
	header('location:index.php?succes = Sign up successfully');
} else {
	header('location:signup.php?errorsql=Loi truy van, Dang ky that bai');
}
