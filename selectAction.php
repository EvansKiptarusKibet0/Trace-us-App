<?php
echo '
<form name="forms" method="POST" action="php/filterProcess.php">
<label>Choose the action</label>
<select id="status" name="sel">
<option value="please select">----please select----</option>
<option value="missing">Report the missing person</option>
<option value="found">Report the found person</option>
<option value="others">Other report</option>
</select>
<br><br>
<input type="submit" value="Submit"/>
</form>
';
?>