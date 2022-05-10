<?php 

if (empty($_POST['id'])) {
	header('location:form_edit.php?error=Phai truyen ma de sua');
	exit;
}

$id = $_POST['id'];

if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['picture'])) {
	header('location:form_edit.php?error=Phai dien day du thong tin');
	exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$picture = $_POST['picture'];

require '../connect.php';

$sql = "update manufacturers 
set 
name = '$name',
address = '$address',
phone = '$phone',
picture = '$picture'
where
id = '$id'";

mysqli_query($connect,$sql);
$error= mysqli_error($connect);
mysqli_close($connect);
if (empty($error)) {
	header('location:index.php?success=Sua thanh cong');
} else {
header("location:index.php?id=$id&error=Loi truy van");}