<?php   
include "DB1connect.php";
$query1 = "UPDATE `order` set `status` = 'wait' WHERE order_number = '".$_GET['nom']."'";
$s = "SELECT * FROM purchase";
$n = mysqli_query($conn, $s);
if(mysqli_num_rows($n) > 0)
{
  while($row = mysqli_fetch_array($n))
  {
    if($row['order_number']==$_GET['nom'])
    {
        $qty=$row['qty'];
        $query2= "UPDATE marble set qty = '".$qty."' WHERE code = '".$row["code"]."'";
    }
  }
}
if(mysqli_query($conn,$query1)){
    echo '<script>alert("ORDERED!!")</script>';
    mysqli_query($conn,$query2);
    echo '<script>window.location="notificationManager.php"</script>';
      }

?>