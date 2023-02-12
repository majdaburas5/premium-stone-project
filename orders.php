<html>
<head>
    <title>Customer Orders</title>
</head>
<body>
<?php
include "DB1connect.php";
$conn = mysqli_connect("localhost", "majd", "1234", "project1");
session_start();
require_once "nav_mang.php" ;
?>
    <h1 style="text-align:center;font-size:50px">Customer Orders</h1>
<?php
    $query2 = "SELECT * FROM order_marble ";
    $query_run2 = mysqli_query($conn, $query2);
    if(mysqli_num_rows($query_run2) > 0)
    {
        foreach($query_run2 as $row)
        {
?>
               <div class="table-responsive">
                    <table class="table table-bordered" style="background-color:white">
                        <tr><br>
                            <div class="card" style="border:20px;background-color:white; border-radius:20px; padding:16px; align:center">
                                <td style="color:black">order number: <?php echo $row["order_num"] ?></td>
                                <td style="color:black">quantity: <?php echo $row["qty"] ?> </td>
                                <td style="color:black">marble code: <?php echo $row["marble_code"] ?></td>
                             </div>
                        </tr>
                    </table>
                </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<?php
        }
    }   
?>
</body>
</html>