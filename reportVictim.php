<?php
echo '
<div class="personReport">
<fieldset>
<legend>Report Victim</legend>
<form method="POST" action="../php/victimRegistrationProcess.php" enctype="multipart/form-data">
<table>
<tr>
<td>Full names:</td>
<td><input type="text" name="fullname" required></td>
</tr>
<tr>

<tr>
<td>Victim ID:</td>
<td><input type="number" name="victimID" required></td>
</tr>
<tr>

<td>Date Of Birth:</td>
<td><input type="date" name="dob" required></td>
</tr>
<tr>
<td>Gender</td>
<td><select name="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select>
</td>
</tr>
<tr>
<td>Last seen</td>
<td><input id="date" type="date" name="lastSeen" required></td>
</tr>
<tr>
<td>Height:</td>
<td>
<select name="height">
<option value="5ft">5ft</option>
<option value="4ft">4ft</option>
<option value="3ft">3ft</option>
</select><br>
</td>
</tr>
<tr>
<td>Clothings:</td>
<td><input type="text" name="clothing">
</td>
</tr>
<tr>
<td>Description:</td>
<td><input type="text" name="desc">
</td>
</tr>
<tr>
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

<fieldset>
<legend>Witness Confirmation</legend>
<table>
<tr>
<td>National ID:</td>
<td><input type="text" name="witnessID" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="passWitness" required></td>
</tr>
</table>
</fieldset>
<input type="submit" name="submit" value="Report">
</form>
<p><a href="../service.php">Go back</a></p>
</div>
';
?>