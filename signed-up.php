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

		<h1 class="feed-title">Signed ✅</h1>
		<p class="posted">You are signed into our list <br>Cool!! Welcome to the club!</p><br>
	
		<h2 class="posted">Name</h2>
		<p class="posted"><?php echo $_POST['name'] ?></p><br><br>
		
		
		<h2 class="posted">Email</h2><br>
		<p class="posted"><?php echo $_POST['email'] ?></p><br><br>
		<?php
		error_reporting(E_ERROR | E_PARSE);

		$Racing = $_POST['gamegenR'];
		$FPS = $_POST['gamegenF'];
		$Sandbox = $_POST['gamegenS'];

		if(is_null($Racing))
		{
			$Racing = " ";
		}

		if(is_null($FPS))
		{
			$FPS = " ";
		}

		if(is_null($Sandbox))
		{
			$Sandbox = " ";
		}


			$gamefav = $Sandbox . " " . $FPS . " ". $Racing
		?>
		<h2 class="posted">Favourite Category</h2><br>
		<p class="posted"><?php echo $gamefav ?></p><br><br>
		
		
 
  	<p id="note">**Check C:\wamp64\www\One Slope\sign-in-detail.txt or <a class="active" href="http:\\localhost\One%20Slope\sign-in-detail.txt">here</a> for something magic</p>

  		<?php 

  		$SignIn = fopen("sign-in-detail.txt", w);

  		fwrite($SignIn,  $_POST['name'] . "\n");
  		fwrite($SignIn,  $_POST['email'] . "\n");
  		fwrite($SignIn,  $gamefav);




  		?>

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
