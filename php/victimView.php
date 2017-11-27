<!DOCTYPE html>
<html>
<head>
<title>Report | found</title>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/report.css">
<meta name="viewport" content="width=device-wisth">
<meta name="description" content="responsive web device">
<meta name="keywords" content="responsive web , affordable website, good website">
<meta name="author" content="Evans Kiptarus kibet">
</head>
<body>
	<div class="personReport">
	<form method="POST" action="insertFoundPerson.php">

			<fieldset>
				<legend>Enter the ID..</legend>
				<table>
					<tr>
		<td>Victim ID:</td>
         <td><input type="number" name="victimID" required></td>
                </tr>
      </table>
			</fieldset>
         
       

     <fieldset>
<legend>Police Confirmation</legend>
<table>
<tr>
<td>Police ID:</td>
<td><input type="text" name="policeID" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" required></td>
</tr>
</table>
</fieldset>
<input type="submit" name="submit" value="Submit">
	</form>
	

</div>
</body>
</html>
