<?php
//for workerlogin.php page
include 'DB1connect.php';
session_start();
$sql="SELECT * FROM workers";
$result =mysqli_query($conn,$sql);
if(isset($_POST['mail'])){
	if(isset($_POST['Password'])){
		while($row=mysqli_fetch_array($result)){
	 		if($row['email']==$_POST['mail'] && $row['password']==$_POST['Password']){
		 		$_SESSION['fname']=$row['name'];
		 		echo"right email & password";
		 	if(isset($_POST['remember']))
		 	{
			 setcookie("email1",$_POST['mail'],time()+60*60*7);
			 setcookie("password1",$_POST['Password'],time()+60*60*7);
		 	}
		 	else
		 	{
		 		if(isset($_COOKIE["email1"]))
		 		{
		 			setcookie("email1","");
		 		}
		 		if(isset($_COOKIE["password1"]))
		 		{
		 			setcookie("password1","");
		 		}
		 	}
		 header("Location:workerPage.php");
		}
	  else if (($row['email']==$_POST['mail'] && $row['password']!=$_POST['Password']) || ($row['email']!=$_POST['mail'] && $row['password']!=$_POST['Password']))
	  {	  
		  header("Refresh:1,workerlogin.php");
	  }

												}
 									}
 							}
?>

 
 




