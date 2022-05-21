<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

require 'admin/connect.php';
session_start();

$cart= $_SESSION['cart'];

foreach ($cart as $key) {
	$total_cost = 0;
	$cost = $key['price'] * $key['quantity'];
	$total_cost += $cost;
}

$customers_id = $_SESSION['id'];
$status = 0; // vua dat hang

$sql = "insert into orders (customers_id, name_receiver, phone_receiver, address_receiver, status, total_cost) value ('$customers_id', '$name', '$phone', '$address', '$status', '$total_cost')";
mysqli_query($connect,$sql);

$sql = "select max(id) from orders where customers_id = '$customers_id'";
$result = mysqli_query($connect,$sql);
$order_id = mysqli_fetch_array($result)['max(id)'];

foreach ($cart as $product_id => $each) {
	$quantity = $each['quantity'];
	$sql = "insert into order_product (order_id, product_id, quantity) value ('$order_id', '$product_id', '$quantity')";
	mysqli_query($connect,$sql);
}
mysqli_close($connect);
unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php echo "Dat hang thanh cong nhe bro"; ?> <br>
	<a href="index.php">Tiep tuc shopping</a>
</body>
</html>
