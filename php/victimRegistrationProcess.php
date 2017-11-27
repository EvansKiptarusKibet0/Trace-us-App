<?php
//get the victims information
include '../db-header.php';

$fname=$_POST['fullname'];
$victimid=$_POST['victimID'];
$date=$_POST['dob'];
$gender=$_POST['gender'];
$lastseen=$_POST['lastSeen'];
$h=$_POST['height'];
$cloth=$_POST['clothing'];
$description=$_POST['desc'];

//get information for policeID
$police=$_POST['policeID'];
$password=$_POST['pass'];

//get the witness information
$witness=$_POST['witnessID'];
$password1=$_POST['passWitness'];

$queryConfirm="SELECT * FROM policedb WHERE policeID='$police' AND password='$password'";
$result=$conn->query($queryConfirm);
if(!$row=$result->fetch_assoc()){
	echo "Wrong police info given";
}
else{
 $victim="SELECT * FROM citizen WHERE idno='$witness' AND password='$password1'";
 $result1=$conn->query($victim);
 if(!$row=$result1->fetch_assoc()){
	 echo "Wrong witness information";
}else
{
	$sql= "insert into victim(fullname,victimid,dob,gender,lastseen,height,clothing,description) 
	values('$fname','$victimid','$date','$gender','$lastseen','$h','$cloth','$description')";
	$result2=$conn->query($sql);
	if(!$result2){
		echo "No information inserted to db";
	}else{

		echo "<h2>Registration succeeed!</h2>";
		header("Location: ../service.php");
}
}
}

?>