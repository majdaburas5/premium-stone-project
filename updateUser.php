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
<?php
    include "DB1connect.php";
    $conn = mysqli_connect("localhost", "majd", "1234", "project1");
    session_start();
    
?>

<html>
    <head>
        <title>UPDATE PROFILE </title>
    </head>
    <body>    
      
      
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

        <?php  require_once "nav2.php" ;
        $query2="SELECT * FROM customer where id='".$_SESSION['id']."'";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) > 0)
        {
          while($row=mysqli_fetch_array($result2))
          {
            if($row['id']==$_SESSION['id'])
                {
      if(isset($_POST['update'])) 
      {   
        $password = $_POST['pass'];
      
        $phone = $_POST['phone'];
        $address = $_POST['address'];
      
         if(!is_numeric($phone) || $phone<10 || is_numeric($address)  ){
          echo '<script>alert("phone or address is invalid")</script>';
          header('Refresh:0 ; url=updateUser.php');
         } 
          else if(!is_numeric($phone) || $phone<10 && is_numeric($address)){
          echo '<script>alert("phone and price is address")</script>';
          header('Refresh:1 ;url=updateUser.php');
         }
    
         
        
            else{
              $sql1 = "UPDATE customer SET `phone`='$phone' WHERE id='".$_SESSION['id']."'";
              $sql2 = "UPDATE customer SET `address`='$address' WHERE id='".$_SESSION['id']."'";
              $sql3 = "UPDATE customer SET `password`='$password' WHERE id='".$_SESSION['id']."'";
      
              if($result = mysqli_query($conn , $sql1)&&$result = mysqli_query($conn , $sql2 )&& $result= mysqli_query($conn , $sql3))
            //  $edit = mysqli_query($conn,"update marble set qty='$quantity', price='$price' where code='$code'");
             echo '<script>alert("the update is succseful")</script>';
             header("Refresh:0,URL=updateUser.php");   
            }
      }
                }
        
       
        ?>
        <form   method="POST" >
            <h3>UPDATE YOUR INFORMATIONS</h3>
            <div class="twitterintentform">
                <div class="css">
                    <label for="phone" >phone</label>
                    <br/><br/>
                    <input name="phone" value="<?php echo $row['phone']?>" type="text" />
                </div>
                <div class="css">
                    <label for="address">address</label>
                    <br/><br/>
                    <input name="address" value="<?php echo $row['address']?>"  type="text" />
                </div>
                <div class="css">
                    <label for="password">password</label> 
                    <br/><br/>
                    <input name="pass" value="<?php echo $row['password']?>" type="text" />
                </div>
                <br>
                <input class="btn" type="submit" value="Update" name="update">
            </div>
        </form>
        <?php require_once "newfooter.php" ;
         }
        }
        ?>

    </body>
</html>