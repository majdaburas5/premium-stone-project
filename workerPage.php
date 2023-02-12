<?php session_start();?>
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
<html>
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
</head>
<body>
<center>
<?php  require_once "nav-worker.php" ?>

<br><br>
<h1 style="color:black ;font-style: Georgia;text-transform: uppercase"><?php echo "Welcome worker ". $_SESSION['fname'] ?></h1>
<br>
<div class="container text-center">    
  <pre style="text-align:center ; font-size:20px ; color:black;font-weight:bold">החלום שלכם, האבן שלנו
כבר שבע שנים שאנחנו מעצבים את ליבו הפועם של הבית שלכם
.ויוצרים את השילוב המדויק בין עיצוב ייחודי לעמידות חסרת פשרות
 .הצטרפו אלינו למסע של השראה ויצירה, בו תבחרו את המשטח המושלם עבורכם

 בחרו את פרימיום סטון שלכם
 .היכנסו ובחרו את המשטח המדויק עבורכם, מתוך עשרות העיצובים בקוורץ או בפורצלן

</pre>
<br><br><br>
<br>
</center>
</body>
</html>
