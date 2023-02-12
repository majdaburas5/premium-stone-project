<?php
//for signup.php page
include 'DB1connect.php';
$ID=$_POST['id'];
$us=$_POST['usrName'];
$tel=$_POST['phone'];
$add=$_POST['address'];
$Email=$_POST['email'];
$pass=$_POST['password'];
$in="INSERT into customer values('$ID','$us','$tel','$add','$Email','$pass')";
$result=mysqli_query($conn,$in);
header('Location:login.php');
?>