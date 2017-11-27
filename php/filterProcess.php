<!DOCTYPE html>
<html>
<head>
<title>Report | Victim</title>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/report.css">
<meta name="viewport" content="width=device-wisth">
<meta name="description" content="responsive web device">
<meta name="keywords" content="responsive web , affordable website, good website">
<meta name="author" content="Evans Kiptarus kibet">
</head>
<body>
<?php
if(isset($_POST['sel'])){
    $select1 = $_POST['sel'];
    switch ($select1) {
        case 'missing':
           
			include '../headerOne.php';
			include '../newLetter.php';
			echo '<h2>Report Missing Person</h2>';
			include '../reportVictim.php';
			include '../footer.php';
            break;
        case 'found':
		    include '../headerOne.php';
			include '../newLetter.php';
            echo '<h2>Report found person</h2>';
            include 'victimView.php';
            include '../footer.php';
            break;
		case 'others':
		     echo 'others value gotten<br>';
			 break;
        default:
            echo 'No value selected';
            break;
    }
}
?>
</body>
</html>