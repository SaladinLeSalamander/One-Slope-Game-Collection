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
			<title>Send Feedback</title>
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
		<h1 class="feed-title">Feedback</h1>
		<h2 class="feed-title">Something in mind with the website? Let us know</h2>
		<p id="note">feeling unsecure? <a class="active" href="https://forms.gle/hk7GWCK7FAEZJBC48">click here</a> to fill form via Google Form</p>
		
		<form id="feedback-form" action="feedback-posted.php" method="post">
		Name*<br>
		<input type="text" name="name" required><br><br>
		Gender*<br><select name="gender" required>
    <option disabled selected value >-- please choose --</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="undisclosed">Rather undisclosed</option>
  </select><br><br>
		Email*<br><input type="email" name="email" required><br><br>
		Type of Feedback*<br><select name="type-of-feedback" required>
    <option disabled selected value >-- please choose --</option>
    <option value="Complaint">Complaint</option>
    <option value="Suggestion (to improve our website)">Suggestion (to improve our website)</option>
    <option value="Suggestion (to add a game into our collection)">Suggestion (to add a game into our collection)</option>
    <option value="Comment">Comment</option>
    
  </select><br><br>
  	Feedback*<br><textarea name="feedback" rows="10" cols="30" required></textarea><br><p id="note">**note that this feature is limited, if you want to give a long feedback, please email <a class="active" href="mailto:msholeh7197@gmail.com" >msholeh7197@gmail.com</a></p><br>
  	

  	Date and Time*<br><input type="date" name="date" required><br>
  	<br><input type="time" name="time" required><br><br>
  	Today is: 
  	<p id="js-time" class="js-time"></p>
  	<br><br>
  	 <button style="width:150px">Send</button>
	</form>
	<div class="feed-title"><br>
	<button style="width:150px" onclick="cancelProcess()">Cancel</button>
	</div>
		
	</div>
</article>
	

</body>
<footer>
<script>
	var today = new Date();
	
	document.getElementById('js-time').innerHTML = today;

	function cancelProcess(){
		var txt;
    	var r = confirm("Are you sure to clear the form?");
    	if (r == true)
    	{
        	document.getElementById("feedback-form").reset();
        	window.alert("Form is sucessfully reset")

        }}
    	

</script>
<?php

	readfile("http://localhost/One%20Slope/Source/html/Footer.html");

?>
			
		</footer>
		
</html>
