<?php 

if ($_GET['city']) {
	$forecastPage = file_get_contents("http://magicseaweed.com/Sea-Isle-City-Surf-Report/1281/");
}


echo $forecastPage

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Practice Webpage</title>
		<link href="practice1.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>
	<body>

	<div class="background">
		<header>
			<div class="container">
				<div class="logo">
					<!--<img src="strathmere_logo.png">-->
					<h1>Project Strathmere</h1>
				</div>
				<nav>
					<ul>
						<li><a href="#"><span class="active">Home</span></a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Media</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section id="jumbo">
			<div class="container" id="splash">
				<h1>Strathmere</h1>
				<h4>Preserving South Jerse'y best kept secret</h4>
				<a href="#" class="button">Read More</a>
			</div>
		</section>
		<section id="newsletter">
			<div class="container">
				<h1>Subscribe to our Newsletter</h1>
				<form action="process.php">
					<input type="email" placeholder="Enter email...">
					<button type="submit" class="button_1">Subscribe</button>
				</form>
			</div>
		</section>
	</div>
		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="Drone_ffffff_100.png">
					<h3>Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et suscipit lacus, sed vestibulum tortor. Ut posuere, ligula in pulvinar aliquet, tellus justo tempor diam, porttitor consequat tortor ipsum sit amet ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				<div class="box">
					<img src="Home_ffffff_100.png">
					<h3>Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et suscipit lacus, sed vestibulum tortor. Ut posuere, ligula in pulvinar aliquet, tellus justo tempor diam, porttitor consequat tortor ipsum sit amet ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				<div class="box">
					<img src="Happy Mac_ffffff_100.png">
					<h3>Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et suscipit lacus, sed vestibulum tortor. Ut posuere, ligula in pulvinar aliquet, tellus justo tempor diam, porttitor consequat tortor ipsum sit amet ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<p>McIlhenny Webdesign, Copyright &copy; 2017</p>
			</div>
		</footer>
	</body>
</html>
