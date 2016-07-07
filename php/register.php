<!DOCTYPE HTML> 
<?php
if (isset($_POST['Ruser'])&&isset($_POST['Rpass'])&&isset($_POST['Cpass'])) {
	$Ruser=strtolower($_POST['Ruser']);
	$Rpass=$_POST['Rpass'];
	$Cpass=$_POST['Cpass'];
	if(strcmp($Rpass,$Cpass)==0){
		$conn=new mysqli("localhost","root","","logs");
		if ($conn->connect_error) {
			die("Cant Connect To Server Reg File!");
		}
		$tq=mysqli_query($conn,"SELECT `username` FROM `login` where `username`= '$Ruser'");
		$final=mysqli_fetch_array($tq,MYSQLI_ASSOC);
		if (empty($final)) {
			$q=mysqli_query($conn,"INSERT INTO `login`(`username`,`password`) VALUES ('$Ruser','$Rpass')");
			mysqli_close($conn);
			echo "<div id='RBlock'>Registration is Successful</div>";
			sleep(10);
			header('Location:index.php');
		}else{
			
			echo "<div id='RBlock'>UserName Already Exists</div>";
		}

	}
}
?>
<html> 
<head> 
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="shortcut icon" href="../img/i.ico"/>
	<title>ChatApp</title> 
</head> 
<body>
	<div id="banner"><img src="../img/register.png"/></div>
	</div>
	<div id="Regblock">
		<fieldset>
			<legend>Registration</legend> 
			<table border="0">
				<form method="POST"> 
					<tr><td>Name</td><td><input type="text" name="name" required></td> </tr> 
					<tr> <td>Email</td><td> <input type="text" name="email" required></td> </tr> 
					<tr> <td>UserName</td><td> <input type="text" name="Ruser" required></td> </tr> 
					<tr> <td>Password</td><td> <input type="password" name="Rpass" required></td> </tr> 
					<tr> <td>Confirm Password </td><td><input type="password" name="Cpass" required></td> 
					</tr> <tr><tr></tr> <td><input type="submit" name="submit" value="Register"></td> </tr> 
				</form> 
			</table> 
		</fieldset> 
	</div> 
</body> 
</html>