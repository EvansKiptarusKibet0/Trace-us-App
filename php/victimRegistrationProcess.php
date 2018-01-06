<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acme web design | Services</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/loginNot-style.css" type="text/css">
    <meta name="viewport" content="width=device-wisth">

    <meta name="description" content="responsive web device">
    <meta name="keywords" content="responsive web , affordable website, good website">
    <meta name="author" content="Evans Kiptarus kibet">
</head>
<body>
<?php
//get the victims information
include '../db-header.php';
if(isset($_POST['submit'])){
$target="../images/".basename($_FILES["image"]["name"]);
$fname=$_POST['fullname'];
$victimid=$_POST['victimID'];
$date=$_POST['dob'];
$gender=$_POST['gender'];
$lastseen=$_POST['lastSeen'];
$h=$_POST['height'];
$cloth=$_POST['clothing'];
$description=$_POST['desc'];
$img=$_FILES["image"]["name"];


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
	$sql= "insert into victim(fullname,victimid,dob,gender,lastseen,height,clothing,description,img) 
	values('$fname','$victimid','$date','$gender','$lastseen','$h','$cloth','$description','$img')";
	$result2=$conn->query($sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		if($result2){
			echo "<h2>Registration succeeed!</h2>";
			header("Location: ../service.php");
			
		}else{
			echo "No information inserted to db";
		
	}

	}else{
		echo "Image failed to be loaded".mysql_error();
	}
}
}
}else{
	echo "No dir selected".mysql_error();
}

?>
</body>
</html>
