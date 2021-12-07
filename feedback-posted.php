<!Doctype html>
	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
			<link rel="stylesheet" href="http://localhost/One%20Slope/Source/css/MainStyle.css">
			<link id="CSSThemeMode" rel="stylesheet" href="http://localhost/One%20Slope/Source/css/darkMode.css">
			<link id="CSSThemeMode" rel="stylesheet" href="http://localhost/One%20Slope/Source/css/game.css">
			<link id="CSSThemeMode" rel="stylesheet" href="http://localhost/One%20Slope/Source/css/amongUs.css">
			<link id="CSSThemeMode" rel="stylesheet" href="http://localhost/One%20Slope/Source/css/form.css">


			<script src="http://localhost/One%20Slope/Source/js/MainJava.js"></script>
			<title>Feedback Sent</title>
		</head>
<body>
<!--Header-->
<!--On The Left-->
			<header>
<?php

	readfile("http://localhost/One%20Slope/Source/html/Header.html");

?>
			</header>

<article>
	<div class="form-article">

		<h1 class="feed-title">Feedback sent</h1>
		<p class="posted">Cool!! Now your voice can be heared</p><br>
	
		<h2 class="posted">Name</h2>
		<p class="posted"><?php echo $_POST['name'] ?></p><br><br>
		<h2 class="posted">Gender</h2>
		<p class="posted"><?php echo $_POST['gender'] ?></p><br><br>
		<h2 class="posted">Email</h2><br>
		<p class="posted"><?php echo $_POST['email'] ?></p><br><br>
		<h2 class="posted">Type of Feedback</h2>
		<p class="posted"><?php echo $_POST['type-of-feedback'] ?></p><br><br>
  		<h2 class="posted">Feedback</h2>
  		<p class="posted"><?php echo $_POST['feedback'] ?></p><br><br>
  		<h2 class="posted">Date and time set</h2>
  		<p class="posted"><?php echo $_POST['date'] ." ". $_POST['time'] ?></p><br><br>
 
  	<p id="note">**note that this feature is limited, if you want to give a long feedback, please email <a class="active" href="mailto:msholeh7197@gmail.com" >msholeh7197@gmail.com</a></p>

	</div>
</article>
	

</body>
<footer>
<script>
	var today = new Date();

	var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

	var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

	var dateTime = date+' '+time;
	document.getElementById('js-time').innerHTML = today;

</script>
<?php

	readfile("http://localhost/One%20Slope/Source/html/Footer.html");

?>
			
		</footer>
		
</html>
