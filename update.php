
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');
 * {
	 margin: 0;
	 padding: 10px;
	 box-sizing: border-box;
}
 * {
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
}
 body {
	 font: 16px 'Montserrat', sans-serif;
	 color: #000;
	 background: #fff;
	 padding: 10px;
}
 h1 {
	 color: #ef4e4f;
	 text-transform: uppercase;
}
 .twitterintentform {
	 padding: 35px 0;
}
 .twitterintentform .btn {
	 margin: 10px 0;
	 display: inline-block;
	 padding: 10px;
	 background: #ef4e4f;
	 color: #fff;
}
 button, input, select, textarea {
	 font-family: inherit;
	 font-size: 100%;
	 vertical-align: baseline;
	 border: 0;
	 outline: 0;
}
 button::-moz-focus-inner, input::-moz-focus-inner {
	 border: 0;
	 padding: 0;
}
 input[type='text'] {
	 width: 500px;
	 padding: 10px 10px 12px 60px;
	 font-size: 12px;
	 color: #555;
	 border: 1px solid #aaa;
}
 .css {
	 display: block;
	 position: relative;
	 margin: 0 5px 30px 0;
}
 .css input {
	 transition: 0.1s all linear;
}
 .css label {
	 position: absolute;
	 top: 13px;
	 left: 15px;
	 font-size: 12px;
	 font-weight: bold;
	 color: #000;
	 transition: 0.1s all linear;
	 cursor: text;
}
 .css.active input {
	 padding-left: 15px;
	 border: 3px solid #ef4e4f;
}
 .css.active label {
	 top: -18px;
}
 .css #character_remaining {
	 padding: 15px;
	 font-size: 12px;
	 color: #000;
}
 .css #character_remaining.warning {
	 color: #ef4e4f;
}
 
  </style>

<?php

include_once ('DB1connect.php');
if(isset($_POST['submit'])){
    $productid = $_POST['productid'];
    $iprice = $_POST['iprice'];
    $query = "UPDATE options SET iprice=$iprice WHERE productid=$productid";
    $result = mysqli_query($conn , $query);
    $iprice = $_POST['iprice'];
    $query2 = "UPDATE optionss SET iiprice=$iprice WHERE productid=$productid";
    $result = mysqli_query($conn , $query2);
if($result){
    header("location:managerPage.php");
    echo'updated!';
}
else{
    echo "try again";
}
mysqli_close($conn);
}

?>

<style>
  h1 {
    font-weight: bold;
    font-style: Georgia;
  border: 5px solid white;
  margin: 50px;
  
  }
  body{
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}

</style>


<body>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PREMUIM STONE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<link rel=stylesheet type="text/css" href="navbar.css">
  
</style>
<!DOCTYPE html>
<html>
<head>	
<?php  require_once "nav_mang.php" ?>
<h2  style="text-align: center; color:white; font-family: cursive"><b>Update product</b></h2>
  <form id="contact" action="update.php" method="post" enctype="multipart/form-data">
  <h3>UPDATE PRICE</h3>
 
<div class="twitterintentform">
  <div class="css">
    <label for="Productid">Productid</label>
    <input name="productid" id="Productid" type="text" required/>
    <div id="character_remaining"></div>
  </div>
  <div class="css">
    <label for="Productid">price</label>
    <input name="iprice" id="iprice" type="text" required/>
    <br>
    
    <input class="btn" type="submit" value="Update" name="submit">
  </div>
  </form>
</div>
<script>
$(document).ready(function() {
  // form animation
  $('input').each(function() {

    $(this).on('focus', function() {
      $(this).parent('.css').addClass('active');
    });

    $(this).on('blur', function() {
      if ($(this).val().length == 0) {
        $(this).parent('.css').removeClass('active');
      }
    });

    if ($(this).val() != '') $(this).parent('.css').addClass('active');

  });
});
  </script>