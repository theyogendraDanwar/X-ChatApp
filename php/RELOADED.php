
<?php
$conn=new mysqli("localhost","root","","logs");
	if ($conn->connect_error)
		die("Problem In The Reloaded Admin!");	
	$q=mysqli_query($conn,"(SELECT `id`,`username`,`message` FROM msg ORDER BY id DESC LIMIT 14) ORDER BY id ASC");
	if($q!=0)
	while ( $extract=mysqli_fetch_array($q,MYSQLI_ASSOC) ) {
		echo strtoupper($extract['username']).": ".$extract['message']."<br/>";
	}
?>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>