		<?php
		session_start();
		if (empty($_SESSION['Luser'])) {header('Location:index.php');}
		?>
		<html>
		<head>
			<link rel="stylesheet" type="text/css" href="css/Designer.css">
			<link rel="shortcut icon" href="/i.ico"/>
			<title>SocialChat</title>
		</head>
		<body onunload="myFunction()">
			<script src="js/Script.js"></script>
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
			<script src="jquery.js"></script>
			<script>
				$(document).ready(function(){
					$("#msgBox").focus();
					setInterval(function(){$('#screen').load('RELOADED.php')},1500);
					$('#msgBox').keydown(function(event) {
					if (event.shiftKey&&event.keyCode == 13) {
						return 1;
					};	
					if (event.keyCode == 13) {
						$("#send").click();
						return false;
					}
				});
			});	
			</script>
	<div class="header">
		<!-------------------TopMenu---------------->
		<ul>
			<li>
				<a href="">Layout&#9662;</a>
				<!---------------------------------------- Layout Sub Menu------------------------------>
				<ul class="Ldropdown">
					<li class="List1"><a href="#" onmouseover="Lay1()">Layout1</a></li>
					<li class="List2"><a href="#" onmouseover="Lay2()">Layout2</a></li>
					<li class="List3"><a href="#" onmouseover="Lay3()">Layout3</a></li>
					<li class="List4"><a href="#" onmouseover="Lay4()">Layout4</a></li>
				</ul>
			</li>

			<li>
				<a href="#">Config&#9662;</a>
				<ul class="LCdropdown">
					<li class="List1"><a href="#">Settings</a></li>
				</ul>
				<!---------------------------------------- Config Sub Menu------------------------------>
			</li>
			<li>
				<a href="#">Mailer</a>
			</li>
			<li>
				<a href="aboutus.php">About US</a>
			</li>
		</ul>
		<!-------------------END OF TopMenu---------------->
		<div id="Ltbox" style=<?php if (isset($_SESSION['Luser']))
		echo '"display:inline"';
		?>
		><a href="lo.php">Hi <?php echo $_SESSION['Luser'];?>!</a></div>
	</div>
	<!--Main Menu Ends Here-->
	<div class="main">
		<!-----------------------Main Tag-------------------->
		<div class="middleBody" style=<?php if (isset($_SESSION['Luser'])) 
		echo '"visibility:visible"';
		else
			echo '"visibility:hidden"';
		?>>
		<div style="padding-top:10%;">
			<div id="screen"></div>
			<form name="ChatMAIN" method="POST" id="ChatMAIN">
				<textarea name="msgBox" id="msgBox" placeholder="Type Your Text Here.."></textarea><input type="button" id="send" value="SEND" onclick="Submitter()" style="width:12%;height:100%;position:absolute;">
			</form>
		</div>
	</div>
</div>
<footer><label>Copyright &#169; Neo Corporation</label></footer>
</body>
</html>