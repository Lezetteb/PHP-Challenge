<?php
$title = 'Your contact information';
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
			<section class="upper_three">
				<h5>You entered your name as "<?php echo ($_POST['name']); ?>"</h5>
				<h5>You entered your email as "<?php echo ($_POST['email']); ?>"</h5>
				<h5>And your message is "<?php echo ($_POST['subject']); ?>"</h5>
			</section>
			<footer class="footer">
				<?php include 'includes/footer.php'; ?>
			</footer>
		</div> <!-- end of wrapper  -->
	</main>
</body>
</html>