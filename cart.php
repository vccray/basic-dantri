<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	session_start();
	//$cart= $_SESSION['cart'];
	$sum_cost = 0;
	require 'header.php';
	?>
	<?php if (empty($_SESSION['cart'])) {
		echo "Your cart is empty, back to shopping";
	} else { ?>
	 <table border="1" width="100%">
	 	<tr>
	 		<th>Picture</th>
	 		<th>Name</th>
	 		<th>Price</th>
	 		<th>Quantity</th>
	 		<th>Total</th>
	 		<th>Delete</th>
	 	</tr>
	 	<?php foreach ($_SESSION['cart'] as $id => $each): ?>
	 		<tr>
	 			<td>
	 				<img src="admin/products/photo/<?php echo $each['picture'] ?>", height='100px'>
	 			</td>
	 			<td>
	 				<?php echo $each['name'] ?>
	 			</td>
	 			<td>
	 				<?php echo $each['price'] ?>
	 			</td>
	 			<td>
	 				<a href="update_quantity_cart.php?id=<?php echo $id?>&type=sub">-</a>
	 				<?php echo $each['quantity'] ?>
	 				<a href="update_quantity_cart.php?id=<?php echo $id?>&type=plus">+</a>
	 			</td>
	 			<td>
	 				<?php
	 					$cost = $each['price'] * $each['quantity'];
	 					$sum_cost += $cost;
	 					echo $cost;
	 				?>
	 				millions
	 			</td>
	 			<td>
	 				<a href="delete.php?id=<?php echo $id?>">Del</a>
	 			</td>
	 		</tr>
	 	<?php endforeach ?>
	 	<tr>
	 		<th colspan="4"> <h1>Total cost</h1></th>
	 		<th colspan="2" align="left"> <h1> <?php echo $sum_cost ; ?> millions </h1>  </th>
	 	</tr>
	 </table>
	 <?php } ?>
	 <?php 
	 	$id= $_SESSION['id'];
	 	require 'admin/connect.php';
		$sql = "select * from customers where id = '$id'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
	  ?>
	 <form method="post" action="order.php">
	 	Tên người nhận
	 	<input type="text", name="name" value="<?php echo $each['name'] ?>"> <br>
	 	Số điện thoại người nhận
	 	<input type="text", name="phone" value="<?php echo $each['phone'] ?>"> <br>
	 	Địa chỉ người nhận
	 	<input type="text", name="address" value="<?php echo $each['address'] ?>"> <br>
	 	<button>Đặt hàng</button>
	 </form>
</body>
</html>