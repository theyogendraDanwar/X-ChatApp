<?php
session_start();
$conn=new mysqli("localhost","root","","logs");
if ($conn->connect_error) {
	die("Cant Connect To Server Lo!");
}
mysqli_query($conn,"UPDATE `login` SET logged_Status=0 where `id`='$_SESSION[id]' ");
mysqli_close($conn);
session_destroy();
header('Location:../index.php');
?>