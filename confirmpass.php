<?php
//forgetten password
include "DB1connect.php";
$conn = mysqli_connect("localhost", "majd", "1234", "project1");
session_start();
if(isset($_POST['newpassword']) && isset($_POST['confirmpassword']) && isset($_POST['oldpass']))
{
    if(($_POST['newpassword']==$_POST['confirmpassword']) && ($_POST['oldpass']==$_SESSION['randpassword']))
    {
        $result = mysqli_query($conn,"UPDATE customer set password= '".$_POST['newpassword']."' WHERE password='".$_SESSION['randpassword']."'");
        header("Location:index.php"); 
    }
    else
        echo "not even";
        header("Refresh:2,reset.php");
        
}

?>