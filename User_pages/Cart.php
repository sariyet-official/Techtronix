<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Shopping Cart design</title>
	<link href="../CSS/Cart.css" rel="stylesheet">
</head>
<body>
	<?php
	@include "../Components/header.php";
	?>
    <div class="wrapper">
		<h1>Shopping Cart</h1>
		<div class="project">
			<div class="cart-shop">
				<div class="cart-box">
					<img src="../Images/camera.jpeg">
					<div class="content">
						<h3>Adob camera FHD</h3>
						<h4>Price: ₹19999</h4>
						<p class="unit">Quantity: <input name="" value="2"></p>
						<button class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></button>
					</div>
				</div>
				<div class="cart-box">
					<img src="../Images/drone.jpeg">
					<div class="content">
						<h3>Drone XF6</h3>
						<h4>Price: ₹19875</h4>
						<p class="unit">Quantity: <input name="" value="1"></p>
						<button class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></button>
					</div>
				</div>
				<div class="cart-box">
					<img src="../Images/earphone.jpeg">
					<div class="content">
						<h3>Earphone C3</h3>
						<h4>Price: ₹12899</h4>
						<p class="unit">Quantity: <input name="" value="1"></p>
						<button class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></button>
					</div>
				</div>
			</div>
			<div class="right-bar">
				<p><span>Subtotal</span> <span>₹52773</span></p>
				<hr>
				<p><span>Tax (5%)</span> <span>₹2513</span></p>
				<hr>
				<p><span>Shipping</span> <span>₹150</span></p>
				<hr>
				<p><span>Total</span> <span>₹55436</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
	</div>
<?php
@include "../Components/footer.php";
?>
</body>
</html>