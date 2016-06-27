<?php
//User Login Confirmation
session_start();
if (isset($_POST['Uname'])&&isset($_POST['pass'])) {
	$user=strtolower($_POST['Uname']);
	$pass=($_POST['pass']);
	$conn=new mysqli("localhost","root","","logs");
	if ($conn->connect_error) {
		die("Cant Connect To Server Index 2 File!");
	}
	$q=mysqli_query($conn,"SELECT `id`,`username`,`password`,`logged_Status` FROM `login` where `username`= '$user' AND `password`='$pass'");
	$final=mysqli_fetch_array($q,MYSQLI_ASSOC);
	if(!empty($final))
	{
		if (($user==$final['username']&&$pass==$final['password']&&$final['logged_Status']==0)){
			mysqli_query($conn,"UPDATE `login` SET logged_Status=1 where `id`='$final[id]' ");
			$_SESSION['Luser']=$user;
			$_SESSION['id']=$final['id'];
			mysqli_close($conn);
			header('location:index2.php');
		}else{
			echo '<script type=text/javascript>'
			,'alert("User Already Logged In");'
			,'</script>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<script src="js/Script.js"></script>
	<noscript>This Browser Does Not Support Javascript</noscript>
	<link rel="shortcut icon" href="/i.ico"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>ChatApp</title>
</head>
<body>
	<div id="belt"></div>
	<div id="Block">
		<div id="Text">ChatApp</div>
		<!----------------------------------------Registeration------------------------------>
		<button><a href="register.php">Register</a></button>
		<!----------------------------------------End Of Registeration------------------------------>
	</div>
	<div id="Narrator">Innovation is Everything</div>

	<!---------------------------------------- Login------------------------------>
	<div id="LoginBox">
		<form method="POST" action="index.php" name="Validator">
			Username:<input type="text" name="Uname" size="10" required/><br>
			Password:<input type="password" name="pass" size="10"required/><br>
			<input type="submit" value="SignIn" style="width:100%;font-family: consolas, Georgia, Serif;">
		</form>
		<div onclick="lBox()">Login</div>
	</div>
	<!----------------------------------------End Of Login------------------------------>
</body>
</html>