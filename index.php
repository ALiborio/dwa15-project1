<?php include('quote.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adam Liborio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<h1>Adam Liborio</h1>
	<img src="images/adamliborio.jpg" alt="My Headshot">
	<h3>About Me</h3>
	<p>
		I'm from Dartmouth, MA but I currently reside in Fall River, MA. I received my Bachelor's of Science in Computer and Information Science from UMass Dartmouth. I'm currently a software developer at a medical software company. Previously, I was the co-founder of a independent game development studio, where I programmed three games that were released on iOS and Android. My current work involves working with various proprietary programming languages.
	</p>
	<p>
		I consider myself a life-long learner. I have a passion for learning new technologies and concepts. My goals for taking the Dynamic Web Applications course is to learn more about back-end web development and make me a more well-rounded developer. 
	</p>
	<h3>Random Quote</h3>
	<div class="quote">
		<?php echo getQuote($index); ?>
		<div class='author'>
			<em>- <?php echo getAuthor($index); ?></em>
		</div>
	</div>
</div>
</body>
</html>