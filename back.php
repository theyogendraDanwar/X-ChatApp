<?php
session_start();
if(isset($_SESSION['Luser'])){
	$uname = $_SESSION['Luser'];
	$msg = $_POST['msgBox'];
	$conn=new mysqli("localhost","root","","logs");
	if ($conn->connect_error) {
		die("Problem In The BackLog Admin!");
	}
	mysqli_query($conn,"INSERT INTO `msg` (`username`,`message`)VALUES('$uname','$msg')");
	mysqli_close($conn);
	$conn=new mysqli("localhost","root","","logs");
	$q=mysqli_query($conn,"(SELECT `id`,`username`,`message` FROM msg ORDER BY id DESC LIMIT 10) ORDER BY id ASC");
	while ($extract=mysqli_fetch_array($q,MYSQLI_ASSOC)) {
		echo strtoupper($extract['username']).": ".$extract['message']."<br/>";
	}
}else
header('Location:index.php');
session_write_close();
?>