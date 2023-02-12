<style>
  .bn3637 {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.7rem 2rem;
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  color: black;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}
.bn36 {
  border-color: #fff;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
.bn36:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
}
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
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
			echo '<script>window.location="cart.php"</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_code'			=>	$_POST["code"],
			'item_name'			=>	$_POST["name"],
			'item_price'		=>	$_POST["price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_code"] == $_GET["code"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shop.php"</script>';
			}
		}
	}
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>premuim stone </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel=stylesheet type="text/css" href="index.css">
<link rel=stylesheet type="text/css" href="navbar.css">
<link rel=stylesheet type="text/css" href="Style/des.css">
<link rel=stylesheet type="text/css" href="Style/style.css">
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Flaticon Font -->
<link href="Style/lib/flaticon/font/flaticon.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="Style/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="Style/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
</head>
<body>    
<?php  require_once "nav2.php" ?>
<div style="clear:both"></div>
<br/>
<center>
  <form method="POST">
    <h3 style="color:white; font-family: Garamond, serif ;font-size:70px" align="center">Order Details</h3><br/>
    <div class="table-responsive">
      <table class="table table-bordered" style="background-color:white">
        <tr>
          <th width="20%" style="color:black">Item Name</th>
          <th width="10%" style="color:black">Quantity</th>
          <th width="15%" style="color:black">Total</th>
			    <th  width="30%" style="color:black">img</th>
          <th width="5%" style="color:black">Action</th>
        </tr>
        <?php
          if(isset($_SESSION["shopping_cart"]))
          { 
            $flag=0;//flag to add the shipping 1 time
            $_SESSION['total']=0;//start total = 0
            $t1=0;//works
            $t2=0;//polishs
         
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
				      $query = "SELECT * FROM marble";
				      $result = mysqli_query($conn, $query);
				      if(mysqli_num_rows($result) > 0)
			        {
				        while($row = mysqli_fetch_array($result))
					      {
						      if($row['name']==$values['item_name'])
					        $str="<img src=images/".$row['img']. " width='280px' height='130px' >";
                }
              }
			  ?>
        <tr>
          <td style="color:black;font-weight:bold"><?php echo $values["item_name"]; ?></td>
          <td style="color:black;font-weight:bold"><?php echo $values["item_quantity"]; ?></td>
          <td style="color:black;font-weight:bold"><?php echo number_format($values["item_quantity"] * $values["item_price"]);?> ₪</td>
			    <td style="color:black;font-weight:bold"><?php echo $str; ?></td>
          <?php 
            $res1=$conn->query("select * from optionss");//optionss-->works
            while ($row1=$res1->fetch_object()) 
              $works=$row1->iiprice;
            if(isset($_POST['work']))
              $t1=$works;
            $res2=$conn->query("select * from options");//options-->polishs
            while ($row2=$res2->fetch_object()) 
              $polishs=$row2->iprice;
            if(isset($_POST['polish']))
              $t2=$polishs;
            if($flag==0)
            {
              if(isset($_COOKIE['shipping']))
              {
                $shipping=$_COOKIE['shipping'];//save price if shipping as cookie to convert from js to php
                $flag=1;//stop -- to add shipping price one time
              }
            }
            $_SESSION['total']+= ($values["item_quantity"] * $values["item_price"])+$shipping+$_SESSION['t1']+$_SESSION['t2'];
            //to add the shipping one time for all
            $shipping=0;
            setcookie('shipping','',time()-3600);//to unset cookie for the next time
          ?>
          <td style="color:black;font-weight:bold"><a href="shop.php?action=delete&code=<?php echo $values["item_code"]?>"><span style="color:black;font-weight:bold" class="text-danger">Remove</span></a></td>
        </tr>
        <?php
        if(isset($_POST['remove']))//if isset clear options --> the prices will delete
        {
          unset($_SESSION['t1'] );
          unset($_SESSION['t2'] );
        }
            }
          }
        ?>
        <tr>
          <td colspan="3" align="right" style="color:black;font-weight:bold">Total</td>
          <td id='total' style="color:black;font-weight:bold" align="left"><?php echo number_format($_SESSION['total']); ?> ₪</td>
        </tr>
        <th width="5%" style="color:black">options</th>
        <?php 
          $res1=$conn->query("select * from optionss");//optionss-->works
          while ($row1=$res1->fetch_object()) 
          {
            $works=$row1->iiprice;//works+assembly price from db
            echo "<td style='color:black;font-weight:bold'><center> $row1->item_name $row1->iiprice ₪<br> <button class='bn3637 bn36' type='submit' name='work'> Add!</button></td>";
          }
          if(isset($_POST['work']))
            $_SESSION['t1']=$works;//save in session to add to total
          $res2=$conn->query("select * from options");//options-->polishs
          while ($row2=$res2->fetch_object()) 
          {
            $polishs=$row2->iprice;//polish-wax price from db
            echo "<td style='color:black;font-weight:bold'><center> $row2->item_name $row2->iprice ₪<br> <button class='bn3637 bn36' type='submit' name='polish'>Add!</button></td>";
          }
          if(isset($_POST['polish']))
            $_SESSION['t2']=$polishs;//save in session to add to total
          echo "<td style='color:black;font-weight:bold'><center><br> <button class='bn3637 bn36' type='submit' name='remove'>Clear options</button></td>";
        ?>            
      </table>
  </form>
</div>	
<h3>We have a full 1 year warranty on our marble slabs</h3>
<a href="visa.php"><input style="margin-top:5px ; margin-left:1255px;color:white;" type="submit" class="button-33" value="Checkout" /></a>
<br><br>
<h2> For the shipping prices <br><hr> for 1 killo meter = 10 shekel <br> For 50 killo meter + || 15 shekel</h2>
<script> 
  var price=0;
  function styleselect() //function styleselect() to select city 
  {
    var value = $('#globalstyleselect').val();//value of id $('#globalstyleselect').val() the city price shipping
    var div = $("#stylediv");//to print the distance of city that i isset
    if (value == "10") {
    price=3420; 
    div.html('<b>The distance between nazareth and Be’Er sheva  is:  228km</b> <br> <B>228*15= 3420₪ ILS For shipping');
    }
    if (value == "9") {
      price=2625; 
      div.html('<b>The distance between nazareth and Ashdod  is: 175km</b>  <br> <B>175*15= 2625₪ ILS For shipping');
    }
    if (value == "8") {
    price=430;
    div.html('<b>The distance between nazareth and Karmi’El  is:  43km</b> <br> <B>43*10= 430₪ ILS For shipping');
    }
    if (value == "7") {
      price=310; 
     div.html('<b>The distance between nazareth and Tiberias is: 31km</b> <br> <B>31*10= 310₪ ILS For shipping' );
    }
    if (value == "6") {
      price=1515;
      div.html('<b>The distance between nazareth and Tel aviv is: 101km</b> <br> <B>101*15= 1515₪ ILS For shipping');
    }
    if (value == "5") {
      price=150;
      div.html('<b>The distance between nazareth and Afula is: 15km</b>  <br> <B>15*10= 150₪ ILS For shipping');
    }
    if (value == "4") {
      price=430;
      div.html('<b> The distance between nazareth and Acre is :  43km</b>  <br> <B>43*10= 430₪ ILS For shipping');
    }
    if (value == "3") {
      price=1140;
      div.html('<b>The distance between nazareth and Netanya is: 76km</b> <br> <B>76*15= 1140₪ ILS For shipping');
    }
    if (value == "2") {
      price=1185;
      div.html('<b>The distance between nazareth and Qiryat shemona is: 79km</b>  <br> <B>79*15= 1185₪ ILS For shipping');
    }
    if (value == "1") {
      price=380;
      div.html('<b> The distance between nazareth and Haifa is :  38km</b> <br> <B>38*10= 380₪ ILS For shipping</B>');
    }
  }
  function prints(){//if isset confirm this function work
  var p=parseInt(document.value = price); //price of shipping
  document.cookie ="shipping="+p;//save in cookie
  location.reload();
  setcookie('shipping','',time()-3600,"/");
  }
</script>
<button class='bn3637 bn36' onclick="prints()">Confirm</button>
<script>
  function destroy(){//if isset clear shipping price this function work
    var p=parseInt(document.value = price); 
    document.cookie ="shipping="+p;
    location.reload();
    setcookie('shipping','',time()-3600,"/");
}
</script>
<button class='bn3637 bn36' onclick="destroy()">clear shipping price</button>
</br></br>
<select id="globalstyleselect" onchange="styleselect()" >
  <option value="1">Haifa</option>
  <option value="2">Qiryat shemona </option>
  <option value="3">Netanya</option>
  <option value="4">Acre</option>
  <option value="5">Afula </option>
  <option value="6">Tel aviv</option>
  <option value="7">Tiberias</option>
  <option value="8">Karmi’El</option>
  <option value="9">Ashdod </option>
  <option value="10">Be’Er sheva</option>
</select>
<br>
<span id="stylediv"></span>
<br>
<span id="styledivv"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53711.0253695155!2d35.25471215464376!3d32.71424632671172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c4e7cf16c0fff%3A0xd2385b30c1275dd6!2sNazareth!5e0!3m2!1sen!2sil!4v1652821673796!5m2!1sen!2sil" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</center>
<br/><br/><br/><br/><br/><br/>
<?php include 'newfooter.php';?>
</body>
</html>