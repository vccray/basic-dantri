<?php 
$id = $_GET['id'];
require '../check_admin.php';
require '../connect.php';
$sql = "delete from products
where id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');