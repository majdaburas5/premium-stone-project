<?php
include 'DB1connect.php';
//for testadd.php page
$Code=$_POST['c'];
$type=$_POST['t'];
$price=$_POST['p'];
$qnt=$_POST['q'];
$style=$_POST['s'];
$name=$_POST['n'];
$image=$_POST['i'];
$color=$_POST['color'];
//count to cound errors
$count=0;

if(!is_numeric($Code) || $Code<1){
    echo '<script>alert("code is invalid")</script>';
    $count++;
 }
 if(is_numeric($type)){
    echo '<script>alert("type is invalid")</script>';
    $count++;
 }
 if(!is_numeric($price) || $price<1){
    echo '<script>alert("price is invalid")</script>';
    $count++;
 }
if(!is_numeric($qnt) || $qnt<1){
    echo '<script>alert("quantity is invalid")</script>';
    $count++;
 }
 if(is_numeric($style)){
    echo '<script>alert("style is invalid")</script>';
    $count++;
 }
 if(is_numeric($name)){
    echo '<script>alert("name is invalid")</script>';
    $count++;
 } 
 if(!is_numeric($color)){
   echo '<script>alert("color is invalid")</script>';
   $count++;
} 
 if($count>0)
   header("Refresh:1,URL=testadd.php");
else{
//to database
   $in="INSERT into marble values('$Code','$type','$price','$qnt','$style','$name','$image','$color')";
   $result=mysqli_query($conn,$in);
   echo '<script>alert("the add is succseful")</script>';
   //refresh to original page
   header("Refresh:0,URL=testPRO.php");   
    }
?>