<style>
.card{
  position:relative;
  width:350px;
  height:400px;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#060c21;
}

.card:before{
  content:'';
  position:absolute;
  top:-2px;
  left:-2px;
  bottom:-2px;
  right:-2px;
  background:#fff;
  z-index:-1;
}

.card:after{
  content:'';
  position:absolute;
  top:-2px;
  left:-2px;
  bottom:-2px;
  right:-2px;
  background:#FFA500;
  z-index:-2;
  filter:blur(40px);
}

.card:before,
.card:after{
  background:linear-gradient(#FFA500);
}

.content{
  color:#fff;
  padding:2em;
  text-align:center;
}

.content h2{
  font-size:2em;
}

.content p{
  font-size:1.2em;
  line-height:1.5em;
}
.button-33 {
  background-color:black;
  border-radius: 100px;
  box-shadow: black;
  color:white;
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
  box-shadow: black;
  transform: scale(1.05) rotate(-1deg);
}
</style>
<?php
//for edit products for manager (edit&delete)
include "DB1connect.php";

$con=mysqli_connect("localhost", "majd", "1234", "project1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

  $result = mysqli_query($con,"SELECT * FROM marble ");
  $data=mysqli_fetch_array($result);
  $str="<img src=".$data['img']. " width='150' height='150' >";
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>premuim stone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  <center>
<br><br>
<?php 
require_once "nav_mang.php" ;

$result = mysqli_query($con,"SELECT * FROM marble");
              while($data = mysqli_fetch_array($result)) 
              {
                $str="<img src=images/".$data['img']. " width='300' height='150' >";
                ?>
<br/>
<div class="container">
  <div class="card">
    <div class="imgBx">
      <img><?php echo $str;?>
      <br>
    </div>
    <div class="contentBx">
      <h2 style="color:black; font-weight:bold;font: size 20px;">code: <?php echo $data['code'] ?></h2>
      <div class="size">
        <h3 style="color:black; font-weight:bold;font: size 20px;px" >name: <?php echo $data['name']?></h3>
      </div>
      <div class="color">
        <h3 style="color:black; font-weight:bold;font: size 20px;px">price: <?php echo $data['price'] ?></h3>
            <br>
        <h3 style="color:black; font-weight:bold;font: size 20px;px">qty: <?php echo $data['qty'] ?></h3>        
      </div>
      <button style="margin-top:5px" class="button-33"> <a href="deleteB.php?code=<?php echo $data['code'];?>">DELETE</a></button>
      <button style="margin-top:5px" class="button-33"> <a href="updateTofes.php?code=<?php echo $data['code'];?>">UPDATE</a></button>
    </div>
  </div>
</div>
<?php       }
?>
</center>
</body>
</html>