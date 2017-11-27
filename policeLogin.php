<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="css/report.css">
</head>
<body>
<?php include 'headerOne.php';?>
<?php include 'newLetter.php';?>
<div class="personReport">
<h2>Security Agent Area</h2>
<fieldset>
<legend>Login here</legend>
<form method="POST" action="php/police_loginProcess.php">
<table>
<tr>
<td>PoliceID:</td>
<td><input type="text" name="uname" placeholder="Enter your ID" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" placeholder="Enter your password" required></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Register"/></td></tr>
</table>
</form>
<br>
<br>
<br>
</fieldset>

</div>
<?php include 'footer.php';?>
</body>
</html>