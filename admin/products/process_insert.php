<?php

//if (empty($_POST['name']) || empty($_POST['picture']) || empty($_POST['manu_id']) || //empty($_POST['price']) || empty($_POST['description'])) {
	//header('location:form_insert.php?error=Phai dien day du thong tin');
	//exit;
//}

$name = $_POST['name'];
$picture = $_FILES['picture'];
$price = $_POST['price'];
$description = $_POST['description'];
$manu_id = $_POST['manu_id'];

$folder = 'photo/';
$file_extension = explode('.', $picture['name'])[1];
$file_name = time().'.'.$file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($picture["tmp_name"], $path_file);


require '../connect.php';

$sql = "insert into products (name, picture, price , description, manu_id )
values ('$name', '$file_name', '$price', '$description', '$manu_id')";

mysqli_query($connect,$sql);
$error= mysqli_error($connect);
mysqli_close($connect);
if (empty($error)) {
	header('location:index.php?success=them thanh cong');
} else {
header("location:index.php?id=$id&error=Loi truy van");}

//header('location:index.php?success=Them thanh cong');