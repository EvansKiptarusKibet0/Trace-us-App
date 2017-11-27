<!DOCTYPE html>
<html>
<head>
<title>Register | police</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/report.css">
 <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<header>
    <div class="container">
    <div id="branding">
        <h1><img id="img_logo" src="../img/Logo.png" height="90px" width="90px"/><span class="highlight">Missing</span> People Tracing System</h1>
    </div>
    <nav>
        <ul>
        <li><a href="../LoginIndex.php">Logout</a></li>
        </ul>
    </nav>
    </div>
    </header>
<div class="personReport">
<h2>Security agent Registration</h2>
<fieldset>
<legend>Register here</legend>
<form method="POST" action="db_reg.php">
<label>First name:</label>
<input type="text" name="fname" required/>
<br><br>
<label>Last name:</label>
<input type="text" name="lname"/>
<br><br>

<label>PoliceID:</label>
<input type="text" name="uname"/>
<br><br>

<label>Password:</label>
<input type="password" name="pass"/>
<br><br>

<input type="submit" name="submit" value="Register"/>
</form>
<fieldset>
</div>
<?php include 'footer.php';?>
</body>
</html>