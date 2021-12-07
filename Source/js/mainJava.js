var LightMode = 0;

function ThemeChangeFunction()
{
	
	if (LightMode == 0){
		

	document.getElementById('ThemeMode').src='http://localhost/One%20Slope/Source/img/Sun.png';
	document.getElementById('CSSThemeMode').href='http://localhost/One%20Slope/Source/css/lightMode.css';	
	localStorage.setItem("litMode", LightMode);
	LightMode++;
		}

	else{
	 document.getElementById('ThemeMode').src='http://localhost/One%20Slope/Source/img/Moon.png';
	document.getElementById('CSSThemeMode').href='http://localhost/One%20Slope/Source/css/darkMode.css';	
	 localStorage.setItem("litMode", LightMode);
	LightMode--;
	}
	
}

function toHome(){
	window.location.href='http://localhost/One%20Slope/Home.php';
}

function toGame(){
	window.location.href='http://localhost/One%20Slope/Game%20Collection.php';
}

function toSandbox(){
	window.location.href='http://localhost/One%20Slope/Sandbox%20Collection.php';
}
function toFPS(){
	window.location.href='http://localhost/One%20Slope/FPS%20Collection.php';
}
function toRacing(){
	window.location.href='http://localhost/One%20Slope/Racing%20Collection.php';
}

function amongUs(){
	window.location.href='http://localhost/One%20Slope/About%20Us.php';
}

function collection(){
	window.location.href='http://localhost/One%20Slope/Home.php #collection';
}

function signUp(){
	window.location.href='http://localhost/One%20Slope/Home.php #signUp';
}

function contactUs(){
	window.location.href='http://localhost/One%20Slope/Home.php #contactUs';
}

function meetSholeh(){
	window.location.href='http://localhost/One%20Slope/About%20Us/Sholeh.php';
}

function meetDivessh(){
	window.location.href='http://localhost/One%20Slope/About%20Us/Divessh.php';
}

function meetWahid(){
	window.location.href='http://localhost/One%20Slope/About%20Us/Wahid.php';
}
