<?php
$sub=$_POST['subscribe'];
$to="evans@elimuplus.com";
$email_subject="The subscription to my site";
$email_body="I have subscribe to your website";
$headers = "From: $sub \r\n"; 
mail($to,$email_subject,$email_body,$headers);

echo "message send successfully";
?>