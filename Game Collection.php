<!DOCTYPE html>
<html>
<head>
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
			<link rel="stylesheet" href="Source/css/MainStyle.css">
			<link id="CSSThemeMode" rel="stylesheet" href="Source/css/darkMode.css">
      
			<link rel="stylesheet" href="http://localhost/One%20Slope/Source/css/game.css">
			<script src="Source/js/MainJava.js"></script>
			<title>Game Collection</title>
      <style>
        body{ 
          background-image:  url("http://localhost/One%20Slope/Source/img/gamingbg2"); }
        #gc{
          background-color: rgba(0, 0, 0, 0.75);
        }
        #category
        {
          text-align: left; 
          color: white; font-style: 
          font-size: 25px !important;
          background-color: red;
          padding-left: 10px;
        }
        #categoryBox{margin: 10%; width: ;}
        table{margin-left: 15%; margin-right: 15%;}

        img.exPic {transition: 0.2s all ease-in-out;}
        img.exPic:hover{
          -ms-transform: scale(1.2); /* IE 9 */
          -webkit-transform: scale(1.2); /* Safari 3-8 */
          transform: scale(1.2);
        }




        * {
        box-sizing: border-box;
        }

      .flex-container {
        display: flex;
        flex-direction: row;
        font-size: 30px;
        text-align: center;
      }

      .flex-item-left {
        
        padding: 10px;
        flex: 50%;
      }

      .flex-item-right {
        
        padding: 10px;
        flex: 50%;
      }

      /* Responsive layout - makes a one column-layout instead of two-column layout */
      @media (max-width: 1200px) {
        .flex-container {
          flex-direction: column;
        }
      }
      </style>
</head>
<body>
<header>
			
			<?php

			readfile("http://localhost/One%20Slope/Source/html/Header.html");

			?>
		</header>
			<article>
        <div class="titleBox">
      <div Class="exhibit">
        <div>
          <h2>All Game Colection</h2>
          
          <?php

      readfile("http://localhost/One%20Slope/Source/html/Sandbox.html");

    

      readfile("http://localhost/One%20Slope/Source/html/FPS.html");



      readfile("http://localhost/One%20Slope/Source/html/Racing.html");

      ?>


        </div>
      </div>
      </div>

</body>
			<footer>
				<?php

			readfile("http://localhost/One%20Slope/Source/html/Footer.html");
			
			?></footer>

</html>