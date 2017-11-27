<!DOCTYPE html>
<html>
<head>
<title>Register | police</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/report.css">
 <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<?php
include '../db-header.php';
$first=$_POST['fname'];
$last=$_POST['lname'];
$user=$_POST['uname'];
$password=$_POST['pass'];

$sql= "insert into policedb(firstname,lastname,policeID,password) values('$first','$last','$user','$password')";
$result=$conn->query($sql);

include '../headerOne.php';
include '../newLetter.php';
echo "<h2>Thanks for registration</h2>";
?>
<div class="personReport">
<p>Click the link to go back: <a href="../LoginIndex.php">Go back</a></p>
</div>
<?php include '../footer.php';?>
</body>
</html>