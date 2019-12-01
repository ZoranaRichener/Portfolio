<!doctype html>
<html>
	<head>
		<title>Zorana Richener</title>
		
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, 
		initial-scale=1" />
		<meta name= "description" content= "web developer portfolio">
		<meta name= "author" content= "Zorana Milojkovic">
		<title>Project CV</title>
		<link rel="stylesheet" href="main.css">
		<!--Normalize CSS File -->
		<link rel="stylesheet" href="normalize.css">
		<!--Google Font-Raleway -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,900" rel="stylesheet">
		<!-- Icon Font -->
		<link href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css" rel="stylesheet">
		
	</head>
	
	<body>
		<!-- Header-->
		<header> 
			<h1 class="name" >Zorana Richener</h1>
			<nav class= "navigation">
				<ul>
					<li> <a href="index.php" >Home </a></li>
					<li> <a href="about.html" >About </a></li>
					<li> <a href="technologie.php" >Technologie </a></li>
					<li> <a href="courses.php" >Courses </a></li>
					<li> <a href="work_expirience.html" >Work expirience </a></li>
					<li> <a href="contact.php" >Contact Me </a></li>
				</ul>
			</nav>
		</header>
		<!--Intro -->
		<section class="intro">
			<div class="content-intro">
				<h1>I MAKE GREAT STUFF <span> FOR PEOPLE WHO LIKE GREAT STUFF</span></h1>
			</div>
			<button class="button-intro"  > See My Work</button>
		</section>
		
		
		
		<!--Courses -->
		<section id="about_me" class="about-me">
			<div class="content-wrap">
				
				<h4>Courses</h4>
				<hr>
				
				<div id="content-wrap">
					
					<?php 
						$array = array("HTML & CSS","JAVA","HIBERNATE WHIT JAVA","JAVAFX","BOOTSTRAP");
						
						foreach($array as $value) {
							echo "<h1> $value </h1>";
						}
					?>
					
				</div>
			</section>
			
			
			<!-- Footer -->	
			<footer class="footer">
				<div class="content-wrap">
					<p>Lorem ipsum...</p>
					<h5> Copyrights 2019 by Zorana Richener</h5>
					<hr>
				</div>
			</footer>	
			<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>	
		</body>
	</html>		