<?php require('quote.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adam Liborio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="refresh" content="30">
</head>
<body>
<div class="container">
	<h1>Adam Liborio</h1>
	<img src="images/adamliborio.jpg" alt="My Headshot">
	<h2>About Me</h2>
	<p>
		I'm a software developer working on enterprise medical software. I've dabbled in game development on both mobile and PC. I've enrolled the Dynamic Web Applications course to further my web development skills. I look forward to learning the skills necessary to develop truly dynamic web applications that can be used in the real world.
	</p>
	<h2>Random Quote</h2>
	<div class="quote">
		<?php echo getQuote($index); ?>
		<div class='author'>
			<em>- <?php echo getAuthor($index); ?></em>
		</div>
	</div>
</div>
</body>
</html>