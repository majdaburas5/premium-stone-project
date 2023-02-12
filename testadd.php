<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>ADD PRODUCT</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
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
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
  </style>
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
<?php require_once "nav_mang.php" ; ?>

    <form method="POST"  action="addProduct.php">
        <h3>INSERT DETAILS</h3>
        <div class="twitterintentform">
  <div class="css">
    <label for="code">Code</label>
    <input name="c" placeholder=" code"  type="text" required/>
  </div>
  <div class="css">
    <label for="t">Type</label>
    <input name="t" placeholder="Type" type="text" required/>
    </div>
    <div class="css">
    <label for="p">Price</label>
    <input name="p" placeholder="price" type="text" required/>
  </div>     
    <div class="css">
    <label for="q">Quantity</label>
    <input name="q" placeholder="Quantity" type="text" required/>
    </div>
    <div class="css">
    <label for="s">Style</label>
    <input name="s" placeholder="Style" type="text" required/>
    </div>
    <div class="css">
    <label for="n">Name</label>
    <input name="n" placeholder="Name" type="text" required/>
    </div>
    <div class="css">
    <label for="color">color</label>
    <input name="color" placeholder="Number" type="text" required/>
    </div>
    <div class="css">
    <label for="i">Image</label>
    <input name="i" placeholder="img" type="text" required/>
    <br>
    <a href="testPRO.php"> <input class="btn" type="submit" value="Update" name="create">
    </div>  
    </form>
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
</body>
</html>
