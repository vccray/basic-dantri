<?php require '../check_super_admin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	if (empty($_GET['id'])) {
		header('location:index.php?error=Phai truyen ma de sua');
	}
	$id = $_GET['id'];
	require "../menu.php";
	require "../connect.php";
	$sql = "select * from manufacturers
	where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	 ?>
	<form action="process_edit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Ten
		<input type="text" name="name" value="<?php echo $each['name'] ?>"> <br>
		Dia chi
		<input type="text" name="address" value="<?php echo $each['address'] ?>"> <br>
		So dien thoai
		<input type="number" name="phone" value="<?php echo $each['phone'] ?>"> <br>
		Anh
		<input type="text" name="picture" value="<?php echo $each['picture'] ?>"> <br>
		<button>Sua</button>
	</form>
</body>
</html>