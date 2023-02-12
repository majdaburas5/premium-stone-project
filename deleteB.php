<?php
//for testPRO.php page
include "DB1connect.php";
$conn=mysqli_connect("localhost", "majd", "1234", "project1");
$code=$_GET['code'];//code of marble that i want to delete
$result = mysqli_query($conn,"delete from marble where code='$code'");
if($result)
{
    mysqli_close($conn);
    header("location:testPRO.php");
} 
?>
