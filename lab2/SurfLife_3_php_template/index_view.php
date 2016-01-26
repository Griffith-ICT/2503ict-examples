<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Surf Life: Products</title>
		<meta name="viewport" content="initial-scale=1">
		<link rel='stylesheet' media='screen and (min-width:768px)' type='text/css' href="css/desktop.css">
		<!-- For desktop with narrow window -->
		<link rel='stylesheet' media='screen and (min-device-width:480px) and (max-width:768px)' type='text/css' href="css/mobile.css">
		<!-- For mobile device -->
		<link rel='stylesheet' media='screen and (max-device-width:480px)' type='text/css' href="css/mobile.css">
	</head>
	<body>
		<div id="body">
			<div id="header">
				<p id="header_text">Surf Life</p>
			</div>
			
			<div id="products">

				<?php foreach ($products as $product) { ?>
					<div class="product">
						<div class="product_image">
							<img src="<?= $product['image'] ?>">
						</div>
						<div class="product_details">
							<div class="product_name">
								<p><?= $product['name'] ?></p>
							</div>
							<div class="product_description">
								<p><?= $product['description'] ?></p>
							</div>
							<div class="product_price">
								Price: <?= $product['price'] ?>
							</div>
						</div>
					</div>
				<?php } ?>

				<a href="classic.html">Classic Version</a>
			</div>
			<div id="menu">
				<ul class="menu">
					<li>Home
					<li>Products
					<li>Contact Us
				</ul>
			</div>
			<div class='footer'>
				
			</div>
		</div>

	</body>

</html>