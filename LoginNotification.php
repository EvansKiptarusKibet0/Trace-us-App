<?php
session_start();
$user= $_SESSION['username'];
echo $user
?>

<?php
echo '<div id="main">

<p>
Login successfully
</p>
<div class="btn_logout">
<button onlick="index">Logout</button>
</div>
</div>';
?>





