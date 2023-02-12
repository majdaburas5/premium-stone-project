<?php   
//for notification.php page
include "DB1connect.php";
$query1 = "UPDATE `order` set `status` = 'complete' WHERE order_number = '".$_GET['id']."'";
$s = "SELECT * FROM cus_not";
$n = mysqli_query($conn, $s);
if(mysqli_query($conn,$query1)){
    echo '<script>alert("Thanks!!")</script>';
    echo '<script>window.location="notification.php"</script>';
      }
?>