<?php
$title = 'A little bit of PHP stuff';
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
<!--Developer: Lezette Boutin
Table of Contents
HEADER - PHP Challenge
MAINCONTENT -  PHP pages, includes and form
FOOTER - copyrightht 2020-->
<body>
	<main class="main-content">
		<div id="wrapper">
			<header class="top">
				<?php require 'includes/header.php'; ?>
			</header>
			<div class="top_nav">
				<?php require 'includes/nav.php'; ?>
			</div>
			<section id="upper">
				<h2>PHP fluff</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<aside id="aside_one">
				<h3>More PHP fluff</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</aside>
			<aside id="aside_two">
				<h3>Selected PHP fluff</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</aside>
			<footer class="footer">
				<?php include 'includes/footer.php'; ?>
			</footer>
		</div> <!-- end of wrapper  -->
	</main>
</body>
</html>