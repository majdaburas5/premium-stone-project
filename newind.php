<style>
div.gallery {
  margin: 23px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
<?php include "DB1connect.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>premuim stone</title>
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
<body >
<?php  require_once "nav2.php" ?>
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/img_9925.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Choose any color you like</h3>
                            <a href="cart.php" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/img_9923.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">You can find anything here</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
<div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">25+</h4>
                        <h1 class="m-0">Years Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Are The Best Stone selllers Firm In Your City</h1>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Color Planning</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Exterior & Interior</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Commercial Design</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Residential Design</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Awesome Stone For Your Home</h1>
                    <a href="newcart.php" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Room </h5>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Kitchen </h5>
                            
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bathroom </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Services End -->
    <div class="container text-center">    
  <pre style="text-align:center ; font-size:20px ; color:black;font-weight:bold">
  החלום שלכם, האבן שלנו
כבר שבע שנים שאנחנו מעצבים את ליבו הפועם של הבית שלכם
.ויוצרים את השילוב המדויק בין עיצוב ייחודי לעמידות חסרת פשרות
 .הצטרפו אלינו למסע של השראה ויצירה, בו תבחרו את המשטח המושלם עבורכם

 בחרו את פרימיום סטון שלכם
 .היכנסו ובחרו את המשטח המדויק עבורכם, מתוך עשרות העיצובים בקוורץ או בפורצלן
</pre><br>
  </div>
    <hr>
<div class="wrapper">		
<section class="columns">
	<div class="column">
		<center><h1>פגישה</h1></center>
    <hr>
		<p>ניפגש על כוס קפה ולאחר שנעבור על כלל הדגמים שלנו, נבחר את המתאים ביותר לכם ונבצע הזמנה.</p>
	</div>
	
	<div class="column">
    <center><h1>מדידה</h1></center>
    <hr>
		<p>צוות המודדים שלנו יגיע אליכם לביצוע מדידה מקיפה של המטבח ואזור השיש המיועד.</p>
	</div>
  <div class="column">
  <center>	<h1>הרכבה</h1></center>
    <hr>
		<p>הגיע היום המיוחל וצוות המרכיבים שלנו יגיע לביתכם להתקנת השיש. תתחדשו!!!</p>
	</div>
</section>	
</div>
<?php
$z=" SELECT * FROM top_5 ORDER BY qty desc limit 5";
$l=mysqli_query($conn,$z);?>
<div class="container text-center">
<hr>
      <center><p style="font-size:40px">Top 5 items sold in our shop</p> </center>
 <?php     
    while($row = mysqli_fetch_array($l)){
    echo "<br>";
    echo "\n";
    $rr=" SELECT * FROM marble WHERE code = '".$row['marble_code']."'";
    $n=mysqli_query($conn,$rr);
    while($row1 = mysqli_fetch_array($n)){?>
    <div  class="" >
    <div class="desc"><?php echo $row1['name'] ?></div>
    <?php echo "<img src=images/".$row1['img']. " width='280px' height='130px' >";?>
    </div> 
    <?php
                                         }
                                         }
    ?>
</div>
<br><br><br>
</div>
    <script src="lib/easing/easing.min.js"></script>
    <script src="Style/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="Style/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="Style/lib/lightbox/js/lightbox.min.js"></script>
    <script src="script/slider.js"></script>
    <script src="script/txt.js"></script>
  <!-- Template Javascript -->
   <script src="script/main.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<?php  require_once "newfooter.php" ?>
</body>
</html>
