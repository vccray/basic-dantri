<?php require '../check_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Quan ly san pham <br>
	<a href="form_insert.php">Them san pham</a>
	<?php 
	require "../menu.php";
	?>
	<?php 
	require "../connect.php";

	$sql = "select products.*,manufacturers.name as manufacturer_name from products
	join manufacturers on products.manu_id = manufacturers.id";
	$result = mysqli_query($connect,$sql);
	?>

	<table border = "1", width="100%">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Picture</th>
			<th>Price</th>
			<th>Description</th>
			<th>Manufacturer</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<td><?php echo $each['id'] ?></td>
				<td><?php echo $each['name'] ?></td>
				<td>
					<img src="photo/<?php echo $each['picture'] ?>" height="100">
				</td>
				<td><?php echo $each['price'] ?></td>
				<td><?php echo $each['description'] ?></td>
				<td><?php echo $each['manufacturer_name'] ?></td>
				<td>
					<a href="form_edit.php?id=<?php echo $each['id'] ?>">Edit</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $each['id'] ?>">Del</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>	
</body>
</html>		