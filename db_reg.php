<?php

include '../db-header.php';

$first=$_POST['fname'];
$last=$_POST['lname'];
$user=$_POST['uname'];
$password=$_POST['pass'];

$sql= "insert into policedb(firstname,lastname,policeID,password) values('$first','$last','$user','$password')";
$result=$conn->query($sql);

include 'headerOne.php';
echo "Thanks for registration";
echo "<p><a href='../LoginIndex.php'>Link</a></p>";
include 'footer.php';

?>