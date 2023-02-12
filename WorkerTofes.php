<?php
//for insertWorker.php page
include 'DB1connect.php';
$id=$_POST['i'];
$name=$_POST['n'];
$phone=$_POST['p'];
$city=$_POST['c'];
$priceDay=$_POST['PD'];
$email=$_POST['email'];
$password=$_POST['password'];

$count=0;

if(!is_numeric($id) || $id<9){
    echo '<script>alert("id is invalid")</script>';
    $count++;
 }
 if(is_numeric($name)){
    echo '<script>alert("name is invalid")</script>';
    $count++;
 }
 if(!is_numeric($phone) || $phone<10){
    echo '<script>alert("phone is invalid")</script>';
    $count++;
 }
if(is_numeric($city)){
    echo '<script>alert("city is invalid")</script>';
    $count++;
 }
 if(!is_numeric($priceDay)){
    echo '<script>alert("price per day is invalid")</script>';
    $count++;
 }
 if($count>0)
 header("Refresh:1,URL=insertWorker.php");
      else
    {
    $in="INSERT into workers values('$id','$name','$phone','$city','$priceDay',0,'$email','$password')";
    $result=mysqli_query($conn,$in);
     echo '<script>alert("the add is succseful")</script>';
     header("Refresh:0,URL=insertWorker.php");   
    }
?>