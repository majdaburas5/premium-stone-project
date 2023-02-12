<?php
//database connect
$dbhost = "localhost";
$dbuser = "majd";
$dbpass = "1234";
$db = "project1";
$conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 if(!$conn){
     echo "faild to connect".mysqli_connect_error();
 }
 
?>
