<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Acme web design | Welcome</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta name="viewport" content="width=device-wisth">
    <meta name="description" content="responsive web device">
    <meta name="keywords" content="responsive web , affordable website, good website">
    <meta name="author" content="Evans Kiptarus kibet">
</head>
<body onload="return getInformation()">
<?php

include 'db-header.php';
$user=$_POST['username'];

$password=$_POST['pass'];
	
$sql= "SELECT * from registration WHERE username='$user' AND password='$password'";

$result=$conn->query($sql);
if(!$row=$result->fetch_assoc()){
	include 'header.php';
	include 'newletter.php';
	echo "<h3>Wrong username or password!!</h3>";
	include 'Login.php';
	include 'footer.php';
}
else{
    include 'headerOne.php';
	echo "<u>Welcome </u>"."<u>".$user."</u>"; 
	include 'servicePanel.php';
}
?>
</body>
</html>

