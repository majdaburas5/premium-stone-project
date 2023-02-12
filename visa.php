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
				'item_quantity'	=>	$_POST["quantity"]
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
			'item_quantity'	=>	$_POST["quantity"]
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

<script>
window.addEventListener("load", () => {
    // forms
    let inputs = document.querySelectorAll("input");
    let ccList = document.querySelectorAll(".ccList li");
    let name = document.querySelector(".name");
    let year = document.querySelector(".year");
    let inputCon = document.querySelectorAll(".inputCon");
    let btn = document.querySelector('button');
    //credit card
    let cName = document.querySelector(".name");
    let cList = document.querySelector(".creditCard ul li");
		let cYear = document.querySelector(".creditCard .year");
    let length = inputs.length;
    let regExp =[/^[A-Za-z\'\s\.\,]+$/,/^4[0-9]{12}(?:[0-9]{3})?$/,/^[0-9]{3,4}$/];
    //focusing the text->function
    let fieldColor = (i) => {
        for (j=0; j<inputCon.length; j++){
            if( i == j) {
                inputCon[i].style.color = "rgb(64,146,181)";
            }
            else {
                inputCon[j].style.color = "rgb(193,193,193)";
            }
        }
    }
   let checkInput = (i) => {
       // Name
       if( i == 0) {
            if (inputs[0].value.match(regExp[0])) {
                cName.innerText = inputs[0].value;
                inputCon[0].style.color = "rgb(64,146,181)";
                inputs[0].style.borderBottomColor = "rgb(64,146,181)";
            }
            else if (inputs[0].value == "" || !inputs[0].value.match(regExp[0] )) {
                cName.innerText = "";
                inputs[0].style.borderBottomColor = "red";
            }
       }

       //card number
       if ( i == 1) {
            if(inputs[1].value == "") {
                inputs[1].style.borderBottomColor = "red";
							  cList.innerText = " ";
            }
            else{
                let cNumber = inputs[1].value;
                    cNumber = cNumber.replace(/\s/g, "");
                    if(Number(cNumber)) {
                        cNumber = cNumber.match(/.{1,4}/g);
                        cNumber = cNumber.join(" ");
                        inputs[1].value = cNumber;
                        if(cNumber.length <= 0 ) {
                            cList.innerText = "";
                        }
                        else if (cNumber.length > 19) {
                            cList.innerText = cNumber.substring(0,20);
						    inputs[1].style.borderBottomColor = "red";
                            
                        }
                        else {
                            cList.innerText = cNumber;
						    inputs[1].style.borderBottomColor = "rgb(64,146,181)";
                        }
                    }
                    else  {
                 	    inputs[1].style.borderBottomColor = "red";
                    }
            }
       }
       // card Date
       else if ( i == 2) {
           let dateValue = inputs[2].value;
				   let d = dateValue.replace(/\s/g, "");
           // making sure its a number 
           if(Number(dateValue)) {
               d = dateValue.split("").map((i) => {
                return parseInt(i, 10);
                }   
               );
               let date = new Date();
               let twoDigitYear = parseInt(date.getFullYear().toString().substr(2), 10);
						 //the first two digit in the month field
						if(d.length == 2 ) {
							 //checking for first
							 if((d[0] == 0 && (d[1] !== 0 || d[1] <= 9))  || d[0] == 1 && (d[1] <= 2)) {
								 		inputs[2].style.borderBottomColor = "rgb(64,146,181)";
										cYear.innerText = dateValue + "/";
									}
							else {
								inputs[2].style.borderBottomColor = "red";
							
							}
						 }//End of Month
							else if(d.length == 4) {
							 let twoDigitYearN = parseInt(d[2].toString().concat(d[3].toString()),10);
							 if(twoDigitYearN > twoDigitYear) {
								 let stringDigit = twoDigitYearN.toString();
								 cYear.innerText +=  stringDigit;
								 inputs[2].value = cYear.innerText;
								 inputs[2].style.borderBottomColor = "rgb(64,146,181)";
							 	}
								else {
									inputs[2].style.borderBottomColor = "red";
								}
							}//End of date + full date
           }//END of IF for [i = 2]
        	else {
						    cYear.innerText = "";
								inputs[2].style.borderBottomColor = "red";
					}
       }
		 
		 if(i == 3) {
			 let cV = inputs[i].value;
			 if(Number(cV) && cV.match(regExp[2])) {
				 inputs[i].style.borderBottomColor = "rgb(64,146,181)";
			 }
			 else{
				 inputs[3].style.borderBottomColor = "red";
			 }
		 }
    }
    //setting value initially in the card to that of placeholder
    cName.innerText = inputs[0].getAttribute('placeholder');
    cList.innerText = inputs[1].getAttribute('placeholder');
    cYear.innerText = inputs[2].getAttribute('placeholder') //Adding Event Listeners
    for (i = 0; i < inputCon.length; i++){
        inputs[i].addEventListener('click', fieldColor.bind(this, i));
        inputs[i].addEventListener('input', checkInput.bind(this,i));
    }
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        for(i=0; i < length; i++){
            if(inputs[i].value == "") {
                inputs[i].style.borderBottomColor = "red";
            }
        }
        if(cList.innerText.length < 16) {
            inputs[1].style.borderBottomColor = "red";
        }
    })
});
</script>
    
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

</script>
<?php require_once "nav2.php" ;?>
<head>
<html lang="en">
<head>
 
  <title>payment</title>
  <meta charset="utf-8">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel=stylesheet type="text/css" href="navbar.css">

<link rel=stylesheet type="text/css" href="visa.css">

</head>
<?php
include "DB1connect.php";
$conn = mysqli_connect("localhost", "majd", "1234", "project1");
if(isset($_POST["buy"])) {
$b=0;
$max="SELECT MAX(order_number) as oNum from `order`";
$max_result = mysqli_query($conn,$max);
    if(mysqli_num_rows($max_result) > 0){	
      $mrow = mysqli_fetch_array($max_result);
      $onum = $mrow['oNum']+1;
    }
    else{
      $onum = 1;
    }
    
     $status_wait = "INSERT INTO `order` (order_number,order_date,customer_id,`status`) VALUES ('".$onum."','".date("Y-m-d")."','".$_SESSION['id']."','wait')";
     mysqli_query($conn, $status_wait);
$query = "SELECT * FROM marble";
$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0){	
	$order_num = "SELECT * from `order` order by order_number DESC limit 1";
	$s=mysqli_query($conn, $order_num);
	$t=mysqli_fetch_array($s);
	while($row = mysqli_fetch_array($result)){
	foreach($_SESSION["shopping_cart"] as $keys => $values){
	if($row["code"] == $values["item_code"] && $row["qty"] > $values["item_quantity"]){
		$updb_qty= "UPDATE marble set qty = qty-'" .$values["item_quantity"]."'WHERE code = '".$values["item_code"]."'";
    mysqli_query($conn,$updb_qty);
    $updb2 = "INSERT INTO order_marble (order_num,qty,marble_code) VALUES ('".$onum."','".$values['item_quantity']."','".$values['item_code']."')";
    mysqli_query($conn, $updb2);
    $top5= "UPDATE top_5 set qty = qty +'".$values["item_quantity"]."'WHERE marble_code = '".$values["item_code"]."'";
    mysqli_query($conn,$top5);
     $notification = "INSERT INTO cus_not (item_name,`date`,qty,price,total,img,cust_id,order_number) VALUES ('".$values['item_name']."','".date("Y-m-d")."','".$values['item_quantity']."','".$values['item_price']."','".$values['item_quantity'] * $values['item_price']."','".$row['img']."','".$_SESSION['id']."','".$onum."')";
     mysqli_query($conn,$notification);
		if($b == 0){
      echo '<script>alert("BUY DONE!!!")</script>';
			$b++;
      $_SESSION['order_num']=$t['order_number'];
		 	$query4 = "SELECT * FROM customer";
		 	$result4 = mysqli_query($conn, $query4);
		 	if(mysqli_num_rows($result4) > 0){							
		 	while($row4 = mysqli_fetch_array($result4)){
		 		$str4=$row4["id"];
		 	}
		}
		}	
			}
     else if($row["code"] == $values["item_code"] && $row["qty"] < $values["item_quantity"]){
      echo '<script>alert("WE DONT HAVE THIS QUANTITY WE WILL ORDER TO YOU!!")</script>';
      $status_ordered = "UPDATE `order` SET `status`= 'ordered' WHERE order_number = '".$onum."'";
      mysqli_query($conn, $status_ordered);
      $updb5 = "INSERT INTO order_marble (order_num,qty,marble_code) VALUES ('".$onum."','".$values['item_quantity']."','".$values['item_code']."')";
    mysqli_query($conn, $updb5);
     $notification1 = "INSERT INTO cus_not (item_name,`date`,qty,price,total,img,cust_id,order_number) VALUES ('".$values['item_name']."','".date("Y-m-d")."','".$values['item_quantity']."','".$values['item_price']."','".$values['item_quantity'] * $values['item_price']."','".$row['img']."','".$_SESSION['id']."','".$onum."')";
     mysqli_query($conn,$notification1);
    $updb9 = "INSERT INTO purchase (order_number,code,qty,`date`,item_name,img) VALUES ('".$onum."','".$values['item_code']."',('".$values['item_quantity'] - $row["qty"]."')*2,'".date("Y-m-d")."','".$values['item_name']."','".$row['img']."')";
    mysqli_query($conn, $updb9);
      $updb_qty= "UPDATE marble set qty = 0 WHERE code = '".$values["item_code"]."'";
      mysqli_query($conn,$updb_qty);
     
   
      }
		}
	}
}
}
?>


<body >

     <center>
      <div class="creditCard">
        <div class="visaLogo">
          
        </div>
        <div class="chipLogo">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 230 384.4 300.4" width="38" height="70">
						<path d="M377.2 266.8c0 27.2-22.4 49.6-49.6 49.6H56.4c-27.2 0-49.6-22.4-49.6-49.6V107.6C6.8 80.4 29.2 58 56.4 58H328c27.2 0 49.6 22.4 49.6 49.6v159.2h-.4z" data-original="#FFD66E" data-old_color="#00FF0C" fill="rgb(237,237,237)"/>
						<path d="M327.6 51.2H56.4C25.2 51.2 0 76.8 0 107.6v158.8c0 31.2 25.2 56.8 56.4 56.8H328c31.2 0 56.4-25.2 56.4-56.4V107.6c-.4-30.8-25.6-56.4-56.8-56.4zm-104 86.8c.4 1.2.4 2 .8 2.4 0 0 0 .4.4.4.4.8.8 1.2 1.6 1.6 14 10.8 22.4 27.2 22.4 44.8s-8 34-22.4 44.8l-.4.4-1.2 1.2c0 .4-.4.4-.4.8-.4.4-.4.8-.8 1.6v74h-62.8v-73.2-.8c0-.8-.4-1.2-.4-1.6 0 0 0-.4-.4-.4-.4-.8-.8-1.2-1.6-1.6-14-10.8-22.4-27.2-22.4-44.8s8-34 22.4-44.8l1.6-1.6s0-.4.4-.4c.4-.4.4-1.2.4-1.6V64.8h62.8v72.4c-.4 0 0 .4 0 .8zm147.2 77.6H255.6c4-8.8 6-18.4 6-28.4 0-9.6-2-18.8-5.6-27.2h114.4v55.6h.4zM13.2 160H128c-3.6 8.4-5.6 17.6-5.6 27.2 0 10 2 19.6 6 28.4H13.2V160zm43.2-95.2h90.8V134c-4.4 4-8.4 8-12 12.8h-122V108c0-24 19.2-43.2 43.2-43.2zm-43.2 202v-37.6H136c3.2 4 6.8 8 10.8 11.6V310H56.4c-24-.4-43.2-19.6-43.2-43.2zm314.4 42.8h-90.8v-69.2c4-3.6 7.6-7.2 10.8-11.6h122.8v37.6c.4 24-18.8 43.2-42.8 43.2zm43.2-162.8h-122c-3.2-4.8-7.2-8.8-12-12.8V64.8h90.8c23.6 0 42.8 19.2 42.8 42.8v39.2h.4z" data-original="#005F75" class="active-path" data-old_color="#005F75" fill="rgba(0,0,0,.4)"/>
				  </svg>
        </div>
        <ul class="ccList">
          <li> </li>
        </ul>
        <h4 style="color:white" class="name"> </h4>
        <h4 style="color:white" class="year">   </h4>
      </div>
      <div class="div previousStep"> 
        <div class="arrow">
				
          </div>
        </div>
      <form method="POST" action="visa.php" id="paymentForm">

        <h6>Payment Details</h6>
        <div style="color:white" class="inputCon" id="name" data-top="Name on Card">
          <input type="text" placeholder="preimum stone"/>
          <br>
        </div>
        
        <div  class="inputCon" id="cardNum" data-top="Card Number" title = "type in the card number without spaces">
          <input  type="text" placeholder="1234 1234 1234 1234"/>
          <br><br><br>  
        </div>
        <br>
        <div class="inputCon" id="validYear" data-top="Valid Through">
          <input type="text" placeholder="09/20"/>
        </div>
        <br>
        <div class="inputCon" id="cvv" data-top="CVV">
          <input type="text" placeholder="555"/>
        </div>
        <form method="POST" action="visa.php">
        <button type="submit" style="color:white;background:black ;font-weight:bold" name="buy" >pay</button>

        </div>
     
        </form> 
 
      <?php
      if(isset($_POST["buy"])) 
        unset($_SESSION["shopping_cart"] );
      
    require_once "newfooter.php"; ?>
</body>
</html>
