<?php   
//for workers.php page
include "DB1connect.php";
$query1 = "UPDATE workers set `days` = `days`+1 WHERE `days` = '".$_GET['did']."'";
$s = "SELECT * FROM workers";
$n = mysqli_query($conn, $s);
if(mysqli_query($conn,$query1)){
    echo '<script>alert("The worker active in this day!!")</script>';
    echo '<script>window.location="workers.php"</script>';
      }

?>