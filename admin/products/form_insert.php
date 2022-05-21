<?php require '../check_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	require "../menu.php";
	require "../connect.php";
	$sql = "select * from manufacturers";
	$result = mysqli_query($connect,$sql);
	 ?>
	<form action="process_insert.php" method="post" enctype="multipart/form-data">
		Ten
		<input type="text" name="name"> <br>
		Anh
		<input type="file" name="picture"> <br>
		Gia
		<input type="number" name="price"> <br>
		Mo ta
		<textarea name="description"></textarea> <br>
		Nha san xuat
		<select name="manu_id">
			<?php foreach ($result as $each): ?>
				<option value="<?php echo $each['id'] ?>">
					<?php echo $each['name'] ?>
				</option>
			<?php endforeach ?>
		</select> <br>
			
		<button>Them</button>
	</form>
</body>
</html>