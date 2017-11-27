<!DOCTYPE html>
<html>
<head>
<title>Register | user</title>
 <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php

include 'db-header.php';

$first=$_POST['firstname'];
$last=$_POST['lastname'];
$user=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['pass'];

$sql= "insert into registration(firstname,lastname,username,password,email) values('$first','$last','$user','$password','$email')";

$result=$conn->query($sql);


//header("Location: Login-user.php");
include 'header.php';
echo '

<h3>User added successfully. Click the <a href="LoginIndex">link</a> to login</h3>

';
include 'footer.php';
?>
</body>
</html>