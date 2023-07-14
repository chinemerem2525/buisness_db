<!DOCTYPE html>
<html>
	<?php require "includes/header1.php"; ?>
	<body>
		<?php require "includes/header2.php"; ?>
		<div class="slider_container">
			<figure>
				<img src="images/slider/slider1.jpg">
				<img src="images/slider/slider2.jpg">
				<img src="images/slider/slider3.jpg">
				<img src="images/slider/slider4.jpg">
				<img src="images/slider/slider1.jpg">
			</figure>
		</div>
		
		<div class="slider">
			<div class="slider-items">
				<div class="item active">
					<img src="images/slider/slider1.jpg">
					<div class="caption">
						Slide 1
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slider2.jpg">
					<div class="caption">
						Slide 2
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slider3.jpg">
					<div class="caption">
						Slide 3
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slider4.jpg">
					<div class="caption">
						Slide 4
					</div>
				</div>
			</div>
			
			<!----Slider Controls -->
			<div class="left-slide"><</div>
			<div class="right-slide">></div>
			
			<!----Slider Controls end -->
		</div>
		
		<div class="homepage_container">
			<div class="product_container">
				<div class="product">
					<img src="images/products/ac.jpg">
					<h4>Air Conditioner</h4>
				</div>
				
				<div class="product">
					<img src="images/products/fan.jpg">
					<h4>Ceiling Fan</h4>
				</div>
				
				<div class="product">
					<img src="images/products/fridge.jpg">
					<h4>Refrigerator</h4>
				</div>
				
				<div class="product">
					<img src="images/products/gen.jpg">
					<h4>Power Generator</h4>
				</div>
				
			</div>
			<div class="product_container">
				<div class="product">
					<img src="images/products/iron.jpg">
					<h4>Electric Pressing iron</h4>
				</div>
				
				<div class="product">
					<img src="images/products/microwave.jpg">
					<h4>Microwave Oven</h4>
				</div>
				
				<div class="product">
					<img src="images/products/stove.jpg">
					<h4>Electric Stove</h4>
				</div>
				
				<div class="product">
					<img src="images/products/tv.jpg">
					<h4>Plasma TV</h4>
				</div>
			</div>
			<a href="product.php"><button type="submit" class="product_button">More Products >></button></a>
		</div>
		
		<?php include "includes/footer.php"; ?>
		
	</body>

</html>

