<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Đây là giao diện nhà sản xuất <br>
	<a href="form_insert.php">Them nha san xuat</a>
	<?php 
	require "../menu.php";
	?>
	<?php 
	require "../connect.php";

	$sql = "select * from manufacturers";
	$result = mysqli_query($connect,$sql);

	?>

	<table border = "1", width="100%">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Picture</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<td><?php echo $each['id'] ?></td>
				<td><?php echo $each['name'] ?></td>
				<td><?php echo $each['address'] ?></td>
				<td><?php echo $each['phone'] ?></td>
				<td>
					<img src="<?php echo $each['picture'] ?>" height="100">
				</td>
				<td>
					<a href="form_edit.php?id=<?php echo $each['id'] ?>">Edit</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $each['id'] ?>">De</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>	
</body>
</html>		