<?php
$title = 'A little more PHP stuff';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Challenge</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/icon" href="images/icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Life+Savers&family=Peralta&display=swap" rel="stylesheet">
</head>

<body>
	<main class="main-content">
		<div id="wrapper">
			<header class="top">
				<?php require 'includes/header.php'; ?>
			</header>
			<div class="top_nav">
				<?php require 'includes/nav.php'; ?>
			</div>
			<section id="upper_two">
				<h2>Some more PHP fluff</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<section id="main_form">
				<h2>Contact Me</h2>
				<form id="questions" class="form" method="post" action="results.php" name="questions">
				  	<div class="">
				  		<label for="name">Your Full Name *</label>
				  		<input type="text" id="name" name="name" minlength="2" maxlength = "80" required aria-required="true" placeholder="Your Full name..">
				  	</div>
					<div>
					  	<label for="email-input">Your Email *</label>
						<input type="email" id="email-input" name="email" minlength="4" maxlength = "100" required aria-required="true" placeholder="example@mailbox.com">
					</div>
					<div>
						<label for="subject">I&apos;m excited to hear about your project. *</label>
					</div>
					<div>
						<textarea id="subject" name="subject" minlength="2" maxlength = "1200" required aria-required="true" placeholder="Write something..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No more than 1200 characters please. "></textarea>
					</div>
					<p>* Required</p>
					<div>
						<input type="submit" id="submit" name="contact_me" value="Contact Me">
					</div>		
				</form>
				
			</section>
			<footer class="footer">
				<?php include 'includes/footer.php'; ?>
			</footer>
		</div> <!-- end of wrapper  -->
	</main>
</body>
</html>