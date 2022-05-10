

<?php

//if (empty($_POST['name']) || empty($_POST['picture']) || empty($_POST['manu_id']) || //empty($_POST['price']) || empty($_POST['description'])) {
	//header('location:form_insert.php?error=Phai dien day du thong tin');
	//exit;
//}
//
$id = $_POST['id'];
$name = $_POST['name'];
$new_picture = $_FILES['new_picture'];

if ($new_picture['size']>0) {
	$folder = 'photo/';
	$file_extension = explode('.', $new_picture['name'])[1];
	$file_name = time().'.'.$file_extension;
	$path_file = $folder . $file_name;
	move_uploaded_file($new_picture["tmp_name"], $path_file);
} else {
	$file_name = $_POST['old_picture'];
}

$price = $_POST['price'];
$description = $_POST['description'];
$manu_id = $_POST['manu_id'];

require '../connect.php';

$sql = "update products 
set 
name = '$name',
price = '$price',
description = '$description',
picture = '$file_name',
manu_id = '$manu_id'
where
id = '$id'";

mysqli_query($connect,$sql);
$error= mysqli_error($connect);
mysqli_close($connect);
if (empty($error)) {
	header('location:index.php?success=Sua thanh cong');
} else {
header("location:index.php?id=$id&error=Loi truy van");}


//header('location:index.php?success=Sua thanh cong');