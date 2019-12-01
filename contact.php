<!doctype html>
<html>
	<head>
		<title>Zorana Richener</title>
		
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, 
		initial-scale=1" />
		<meta name= "description" content= "web developer portfolio">
		<meta name= "author" content= "Zorana Richener">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
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
		
		<!--Contact me -->
		<?php
			
			$error = ""; $successMessage = "";
			
			if ($_POST) {
				
				if (!$_POST["email"]) {
					
					$error .= "An email address is required.<br>";
					
				}
				
				if (!$_POST["content"]) {
					
					$error .= "The content field is required.<br>";
					
				}
				
				if (!$_POST["subject"]) {
					
					$error .= "The subject is required.<br>";
					
				}
				
				if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
					
					$error .= "The email address is invalid.<br>";
					
				}
				
				if ($error != "") {
					
					$error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
					
					} else {
					
					$emailTo = "zorana.richener@gmail.com";
					
					$subject = $_POST['subject'];
					
					$content = $_POST['content'];
					
					$headers = "From: ".$_POST['email'];
					
					if (mail($emailTo, $subject, $content, $headers)) {
						
						$successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
						
						
						} else {
						
						$error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
						
						
					}
					
				}
				
				
				
			}
			
		?>
		<div class="container">
			
			<div id="error"><? echo $error.$successMessage; ?></div>
			
			<form method="post">
				<fieldset class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					<small class="text-muted">We'll never share your email with anyone else.</small>
				</fieldset>
				<fieldset class="form-group">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" name="subject" >
				</fieldset>
				<fieldset class="form-group">
					<label for="exampleTextarea">What would you like to ask us?</label>
					<textarea class="form-control" id="content" name="content" rows="3"></textarea>
				</fieldset>
				<button style="background:#00FF01;" type="submit" id="submit" class="btn btn-primary">Submit</button>
			</form>
			
			
			<!-- jQuery first, then Bootstrap JS. -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
			
			
			<script type="text/javascript">
				
				$("form").submit(function(e) {
					
					var error = "";
					
					if ($("#email").val() == "") {
						
						error += "The email field is required.<br>"
						
					}
					
					if ($("#subject").val() == "") {
						
						error += "The subject field is required.<br>"
						
					}
					
					if ($("#content").val() == "") {
						
						error += "The content field is required.<br>"
						
					}
					
					if (error != "") {
						
						$("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
						
						return false;
						
						} else {
						
						return true;
						
					}
				})
				
			</script>
		</div>        
		
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