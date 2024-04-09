<?php
include('connection.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GYM To Train Fitness</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	<header>
		<nav>
			<h2 class="logo"></h2>
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href=""><li>Membership</li></a>
				<a href="about.html"><li>About</li></a> 
				<a href="#"><li>Contact</li></a>
				<a href="#"><li>FAQ</li></a>
			</ul>
		</nav>
		<div class="banner">
			<div class="intro">
				<h2>Gym Enterprise Management System</h2>
				<p>Your personalised journey to Health and Fitness.</p>
				<a href="loginregister.php"><li><button class="btn">login/signup</button></li></a>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="card" style="color: white;background: var(--secondary-color);">
			<h2>Progression</h2>
			<p>All progress takes place outside the comfort zone.</p>
			
		</div>
		<div class="card" style="background: white;">
			<h2 style="color: var(--primary-color);">Workout</h2>
			<p style="color: var(--secondary-color);">Strength does not come from physical capacity. It comes from an indomitable will.</p>
			
		</div>
		<div class="card" style="color: white;background: var(--primary-color);">
			<h2>Nutrition</h2>
			<p>Don't focus on how much you eat. Focus on what you eat.</p>
			
		</div>
	</div>

</body>
</html>