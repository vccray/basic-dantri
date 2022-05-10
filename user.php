<?php 
session_start(); 
if (empty($_SESSION['id'])) {
	header('location:index.php?error=Dang nhap di bro');
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
	<h1>Day la trang nguoi dung <br>
	Xin chao bro <?php echo $_SESSION['name']; ?> </h1>
	<a href="signout.php">Do u wanna cuts</a>
	<?php require 'body.php' ?>
</body>
</html>
