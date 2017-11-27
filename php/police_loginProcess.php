<?php

include '../db-header.php';

$user=$_POST['uname'];
$password=$_POST['pass'];

$sql= "SELECT * from policedb WHERE policeID='$user' AND password='$password'";
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc()){
	echo 'Wrong ID and password,try again!!!';
}
else{
  include '../RegisterPolice.php';
}
?>