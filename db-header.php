<?php
$conn = mysqli_connect("localhost","root","","online");


if(!$conn){
    die("Connection falsed: ".mysqli_connect_error());
}
?>