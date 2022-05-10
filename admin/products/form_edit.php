<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$id = $_GET['id'];
	require "../menu.php";
	require "../connect.php";
	$sql = "select * from products where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	$sql = "select * from manufacturers";
	$manufacturers = mysqli_query($connect,$sql);

	 ?>
	<form action="process_edit.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Ten
		<input type="text" name="name" value="<?php echo $each['name'] ?>"> <br>

		Anh cu
		<img src="photo/<?php echo $each['picture'] ?>" height="100"> <br>
		<input type="hidden" name="old_picture" value="<?php echo $each['picture'] ?>">
		Hoac thay anh moi
		<input type="file" name="new_picture"> <br>

		Gia
		<input type="number" name="price" value="<?php echo $each['price'] ?>"> <br>
		Mo ta
		<textarea name="description"><?php echo $each['description'] ?></textarea> <br>
		Nha san xuat
		<select name="manu_id">
			<?php foreach ($manufacturers as $manufacturer): ?>
				<option value="<?php echo $manufacturer['id'] ?>"
					<?php if ($each['manu_id']==$manufacturer['id']) { ?>
						selected
					<?php } ?> >
					<?php echo $manufacturer['name'] ?>
				</option>
			<?php endforeach ?>
		</select> <br>
			
		<button>Sua</button>
	</form>
</body>
</html>