<?php
//sending mail & check customer login
session_start();
$con = mysqli_connect("localhost", "majd", "1234", "project1");
if(mysqli_connect_errno())
{
	echo "falied";
}
//making random password:
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$_SESSION['randpassword'] = randomPassword();
$result = mysqli_query($con,"select * From customer");
if(!isset($_SESSION['count'])){
	$_SESSION['count']=0; 
}
if(!empty($_POST['mail'])&&!empty($_POST['Password'])){
	$fn = $_POST['mail'];
	$ps = $_POST['Password'];
	while($row = mysqli_fetch_array($result))
	{
		$first=$row['email'];
		$pass=$row['password'];	
		if($first!=$fn&&$pass!=$ps){
			
			header("Refresh:2,signup.php");
		}
		else if($first==$fn&&$pass==$ps){
			$_SESSION['fName']=$row['name'];
			$_SESSION['id']=$row['id'];
			if(isset($_POST['remember']))
		{
			setcookie("email",$_POST['mail'],time()+60*60*7);
			setcookie("password",$_POST['Password'],time()+60*60*7);
		}
		else
		{
		if(isset($_COOKIE["email"]))
		{
		setcookie("email","");
		}
		if(isset($_COOKIE["password"]))
		{
		setcookie("password","");
		}
		}
		header('Location:newind.php');
		}
		else if($pass!=$ps&&$first==$fn){
			    $_SESSION['fName']=$row['name'];
				$_SESSION['count']++;
				header('location:login.php');
		}
	}
}
else{
	include "login.php";
}
if($_SESSION['count']==3){
	header('location:reset.php');
	echo '<script>alert("we sent an email with the new password")</script>';
	$_SESSION['count']=0;
	$to = 'rawadbishara@gmail.com';
	$subject = 'New password';
	$name=$_SESSION['fName'];
	$message = "Hello $name your new password is: \n" .$_SESSION['randpassword'].
	"\nLogin:http://localhost/lab/project1/reset.php";
	$headers = "From: fyv@gmail.com\r\nReply-To: fyv@gmail.com";
	$mail_sent = mail($to, $subject, $message, $headers);
	if($mail_sent == true){
        $result = mysqli_query($con,"UPDATE customer set password= '".$_SESSION['randpassword']."' WHERE email='".$_POST['mail']."'");
			}
	else{
		echo "failed";
	}
	
}
?> 