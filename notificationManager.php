<style>
.button-33 {
  background-color:black;
  border-radius: 100px;
  box-shadow: black;
  color:black;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rblack;
  transform: scale(1.05) rotate(-1deg);
}

.area {
  text-align: center;
  font-size: 70px;
  color: black;
  letter-spacing: -7px;
  font-weight: 700;
  text-transform: uppercase;
  animation: blur .75s ease-out infinite;
  text-shadow: 0px 0px 5px #fff, 0px 0px 7px #fff;
}
</style>		
<?php 
include "DB1connect.php";
session_start();
$conn = mysqli_connect("localhost", "majd", "1234", "project1");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_code = array_column($_SESSION["shopping_cart"], "item_code");
		//in_array
		if(!in_array($_POST["code"], $item_array_code))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_code'			=>	$_POST["code"],
				'item_name'			=>	$_POST["name"],
				'item_price'		=>	$_POST["price"],
				'item_quantity'		=>	$_POST["quantity"]
				//'item_img'		=>	$_POST["img"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
			echo '<script>window.location="shop.php"</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_code'			=>	$_POST["code"],
			'item_name'			=>	$_POST["name"],
			'item_price'		=>	$_POST["price"],
			'item_quantity'		=>	$_POST["quantity"]
			//'item_img'		=>	$_POST["img"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>notification</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel=stylesheet type="text/css" href="navbar.css">
        <link rel=stylesheet type="text/css" href="Style/des.css">
        <link rel=stylesheet type="text/css" href="Style/style.css">
        <link rel=stylesheet type="text/css" href="navbar.css">
  <!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Flaticon Font -->
<link href="Style/lib/flaticon/font/flaticon.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="Style/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="Style/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<link rel=stylesheet type="text/css" href="navbar.css">
	</head>
	<body>
	<?php  require_once "nav_mang.php" ?>

<div style="clear:both"></div>
    <center>
    <h3 style="color:white; font-family: Garamond, serif ;font-size:70px" align="center">Order Details</h3><br />
    <div class="table-responsive">
        <table class="table table-bordered" style="background-color:white">
            <tr>
                <th width="10%" style="color:black">Order to customer</th>
                <th width="15%" style="color:black">order number</th>
                <th width="15%" style="color:black">code</th>
                <th width="15%" style="color:black">Quantity</th>
                <th width="10%" style="color:black">Date</th>
                <th width="15%" style="color:black">Item Name</th>
			    <th width="150%" style="color:black">img</th>
            </tr>
                <?php
                //for rowspan
                 $q="SELECT order_number,COUNT(*) as cnt from purchase GROUP BY order_number";
                 $resu = mysqli_query($conn, $q);
                 if(mysqli_num_rows($resu) > 0)
                       {
                         while($rowS = mysqli_fetch_array($resu))
                         {
                     ?>
            <tr>
            <form  method="POST" role="form" >
                <td rowspan="<?php echo $rowS[1] ?>" style="color:black;font-weight:bold"> 
                <div class="form-check d-flex justify-content-start mb-4">
                    <br>
              <input name="submit1" style="margin-top:5px ; color:black"
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
              />
              <label class="form-check-label" for="form1Example3"  style="color:BLACK;font-weight:bold;"></label>
</div>

<button type="submit" style="color:white;background:black ;font-weight:bold" name="submitb"><a href="notMangertofes.php?nom=<?php echo $rowS['order_number'];?>">ORDER</a></button>

</td> 
<?php
				$query1 = "SELECT * FROM purchase where order_number = '".$rowS[0]."'";
				$result1 = mysqli_query($conn, $query1);
                if(mysqli_num_rows($result1) > 0)
				{
					while($row = mysqli_fetch_array($result1))
					{
                        $str="<img src=images/".$row['img']." width='280px' height='130px' >";

                ?>
  
                <td style="color:black;font-weight:bold"><?php echo $row['order_number']; ?></td>
                <td style="color:black;font-weight:bold"><?php echo $row["code"]; ?></td>
                <td style="color:black;font-weight:bold"><?php echo $row["qty"]; ?></td>
                <td style="color:black;font-weight:bold"><?php echo $row['date']; ?></td>
                <td style="color:black;font-weight:bold"><?php echo $row["item_name"]; ?></td>
				<td style="color:black;font-weight:bold;"><?php echo $str; ?></td>
       
     </form>     
            </tr>
			<?php
        }
            }
        }
    }
            ?>
        </table>
</div>	
</div>
</a>
</body>
</html>