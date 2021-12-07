<!Doctype html>
	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
			<link id="CSSThemeMode" rel="stylesheet" href="http://localhost/One%20Slope/Source/css/form.css">
			<link rel="stylesheet" href="http://localhost/One%20Slope/Source/css/MainStyle.css">
			<link id="CSSThemeMode" rel="stylesheet" href="http://localhost/One%20Slope/Source/css/darkMode.css">
			<script src="http://localhost/One%20Slope/Source/js/MainJava.js"></script>
			<title>One Slope Team</title>
		</head>
<!--Header-->
<!--On The Left-->
			<header>
<?php

	readfile("http://localhost/One%20Slope/Source/html/Header.html");

?>
			</header>
<!--Title Text--->
			<video autoplay muted loop id="titleBGV">
					<source src="Source/vid/BGV.mp4" type="video/mp4">
			</video>
			<div class="TitleBox">
				
				<div>
				<p id="Light">Welcome to</p>
				<h1 id="Light" id="Test" id="collection">One Slope</h1>
				</div>
				<div id="collection"></div>
			
			</div>
<!--Article-->
			
		
		<body>
			<div>
<!--Article1-->

<!--Article2-->
			<div class="Block">
			
			<div Class="Article">
				<article>
			<div>
				<div>
					<h2 id="signUp">Collection</h2>
					<p>Discover with us</p>
				</div>
				<div class="FlexG">
					<button class="FlexBut" onclick="toGame()">Let's go</button>
				</div>
			</div>

				</article>
			</div>
			</div>
<!--Article3-->
<div class="Block">
			
			<div Class="Article">
				<article>
			
				<div>
					<h2 >Sign Up</h2>
				</div>
				<div>
					<p>
						Don't miss anything
					</p>
				</div>
				<div>
					
					<form id="sign-in" action="signed-up.php" method="post">
						Name*<br>
						<input type="text" name="name" required><br><br>
						
						Email*<br><input type="email" name="email" required><br><br>
						Favourite Game Genre:<br><br>
						Sandbox<input type="checkbox" name="gamegenS" value="Sanbox">
						FPS<input type="checkbox" name="gamegenF" value="FPS">
						Racing<input type="checkbox" name="gamegenR" value="Racing">
						<br><br>
						<div class="FlexG">
				    <button class="FlexBut" style="width:150px">Send</button>
				</div>

					</form>
					<div><br>
					
				</div>
				<div class="FlexG">
					<button class="FlexBut" style="width:150px" onclick="cancelProcess()">Cancel</button>
					</div>
				</div>
				</article>


				</div>
				
			</div>
	<!--Article4-->
<div class="Block">
			
			<div  class="Article">
				<article>
			
				<div id="contactUs">
					<h2 >Contact Us</h2>
					<p>
						Let's get to know each other
					</p>
					<div class="FlexG">
					<button class="FlexBut" onclick="amongUs()">To The Back End</button></div>
				</div>
				
				
				</article>
			</div>
			</div>
<!--Ending-->
</div>
<footer>
<script type="text/javascript">
	function cancelProcess(){
		var txt;
    	var r = confirm("Are you sure to clear the form?");
    	if (r == true)
    	{
        	document.getElementById("sign-in").reset();
        	window.alert("Form is sucessfully reset")

        }}
</script>
<?php

	readfile("http://localhost/One%20Slope/Source/html/Footer.html");

?>
			
		</footer>
		</body>
		
	</html>
