<?php 
require '../check_super_admin.php';
if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['picture'])) {
	header('location:form_insert.php?error=Phai dien day du thong tin');
	exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$picture = $_POST['picture'];

require '../connect.php';

$sql = "insert into manufacturers (name, address, phone, picture)
values ('$name', '$address', '$phone', '$picture')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success=Them thanh cong');