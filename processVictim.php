<?php
//connect to the server
mysql_connect('localhost','root','');

//select the database
mysql_select_db('online');

//select something from database
$select="SELECT victim.fullname,victim.victimid,victim.gender FROM victim";

$records=mysql_query($select);

?>
<!DOCTYPE html>
<html>
<head>
<title>Display | records</title>
<link href="css/report.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'headerOne.php'?>
<?php include 'newLetter.php'?>
<h2>My records fetch from db</h2>
<div id="recordTable">
<table width="600px" border="1" cellspacing="1" cellpadding="1">
<tr>
<th>Full names</th>
<th>Victim ID</th>
<th>Gender</th>
</tr>
<!--display every info from db in its own row-->
<?php
while($victim=mysql_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$victim['fullname']."</td>";
	echo "<td>".$victim['victimid']."</td>";
	echo "<td>".$victim['gender']."</td>";
	echo "</tr>";

}
?>
</table>
</div>
<?php include 'footer.php'?>
</body>
</html>