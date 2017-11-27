<?php
if(isset($_POST["submit"])){
	$foundPersonID=$_POST['victimID'];
	$policeID=$_POST['policeID'];
	$pass=$_POST['pass'];

$conn = mysqli_connect("localhost","root","","online");
if(!$conn){
    die("Connection falsed: ".mysqli_connect_error());
}
$query="SELECT * FROM victim WHERE victimid='$foundPersonID'";
$result=$conn->query($query);
if(!$row=$result->fetch_assoc()){
     echo "The user does not exist";
	include 'victimView.php';
}else{

$queryConfirm="SELECT * FROM policedb WHERE policeID='$policeID' AND password='$pass'";
$result=$conn->query($queryConfirm);
if(!$row=$result->fetch_assoc()){
	echo "Wrong police info given";
}else{
	
	$getInfo="SELECT fullname,victimid,dob,gender,lastseen FROM victim WHERE victimid='$foundPersonID'";
	$data=mysql_query($getInfo);
		
	if($data){
	
		while($person=@mysql_fetch_assoc($data)){
			
			 $fname=$person['fullname'];
			 $vid=$person['victimid'];
			 $dob=$person['dob'];
			 $g=$person['gender'];
			 $lastSeen=$person['lastseen'];
			
	 
			 $insert="INSERT into foundperson(fullname,personid,dob,gender,lastseen,datefound) values('$fname','$vid','$dob','$g','$lastSeen','')";
			 $result=$conn->query($insert);
			 if(!$result){
				 echo "Insertion of info failed".mysql_error();
	 
			 }else{
				 $deleteData="DELETE FROM victim where victimid='$foundPersonID'";
				 $del=$conn->query($deleteData);
				 if(!$del){
					 echo "deletion of infomation failed";
	 
				 }else{
					 echo "People found records found!!!";
				 }
			 }
		 }




	

}
else{
echo "Error in fetching data".mysql_error();
}
	
}
}
}
?>