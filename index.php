<!DOCTYPE html>
<html>
<head>
	<title>Adam Liborio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<h1>Adam Liborio</h1>
<img src="images/adamliborio.jpg">
<h2>About Me</h2>
<p>I'm a software developer working on enterprise medical software. I've dabbled in game development on both mobile and PC. I've enrolled in this course to further my web development skills. I look forward to learning the skills necessary to develop truly dynamic web applications that can be used in the real world.</p>
<h2>Random Quote</h2>
<div class="quote">
<?php 
$quotes =
[
	"There is nothing permanent except change. - Heraclitus",
	"Learning never exhausts the mind. - Leonardo da Vinci",
	"No act of kindness, no matter how small, is ever wasted. - Aesop",
	"It is far better to be alone, than to be in bad company. - George Washington",
	"Ever tried. Ever failed. No matter. Try Again. Fail again. Fail better. - Samuel Beckett",
	"Not all those who wander are lost. - J. R. R. Tolkien",
	"Tell me and I forget. Teach me and I remember. Involve me and I learn. - Benjamin Franklin"
];

echo $quotes[rand(0,count($quotes)-1)];
?>
</div>
</div>
</body>
</html>