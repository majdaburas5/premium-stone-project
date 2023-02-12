<?php  require_once "navv.php"
//the same page of cart.php but without quantity & add_to_cart for not connect user
?>
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
include "DB1connect.php";
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
			echo '<script>window.location="newcart.php"</script>';
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
<html>
	<head>
		<title>Shopping cart</title>
    </head>
    <body>   
        <br/>
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <select name="sort_numeric" class="form-control">
                            <option value="">Select Price</option>
                            <option value="low-high" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?> > Low - High</option>
                            <option value="high-low" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "selected"; } ?> > High - Low</option>
                        </select>
                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon1">
                            Filter
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <select name="sort_alphabet" class="form-control">
                            <option value="">Select Alphabet</option>
                            <option value="a-z" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "a-z"){ echo "selected"; } ?> > A-Z (Ascending Order)</option>
                            <option value="z-a" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "z-a"){ echo "selected"; } ?> > Z-A (Descending Order)</option>
                        </select>
                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                            Filter
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <select name="style" class="form-control">
                            <option value="">Select Style</option>
                            <option value="glossy" <?php if(isset($_GET['style']) && $_GET['style'] == "glossy"){ echo "selected"; } ?> > glossy</option>
                            <option value="matte" <?php if(isset($_GET['style']) && $_GET['style'] == "matte"){ echo "selected"; } ?> > matte</option>
                        </select>
                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon3">
                            Filter
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <select name="type" class="form-control">
                            <option value="">Select Type</option>
                            <option value="porcelain" <?php if(isset($_GET['type']) && $_GET['type'] == "porcelain"){ echo "selected"; } ?> > porcelain</option>
                            <option value="synthetic" <?php if(isset($_GET['type']) && $_GET['type'] == "synthetic"){ echo "selected"; } ?> > synthetic</option>
                        </select>
                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon4">
                            Filter
                        </button>
                    </div>
                </div>
            </div>
        </form>
		<div class="container">
			<br />
			<br />
			<br />
			<?php
            $_SESSION['start']=0;
			$count=0;
			$query = "SELECT * FROM marble";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0)
			{
				?>
                    <tbody>
                    <?php
                    $sort_option = "";
                    if(isset($_GET['sort_numeric']))    
                    {
                        if($_GET['sort_numeric'] == "low-high"){
                            $sort_option = "ASC";
                        }elseif($_GET['sort_numeric'] == "high-low"){
                            $sort_option = "DESC";
                        }
                        $query2 = "SELECT * FROM marble ORDER BY price $sort_option";
                        $query_run2 = mysqli_query($conn, $query2);
                        if(mysqli_num_rows($query_run2) > 0)
                        {
                            foreach($query_run2 as $row)
                            {
                                ?>
                                <div class="col-md-4" >
                                <form method="post" action="newcart.php?code:<?php echo $row["code"]; ?>">
                                    <br>
                                    <div class="card" style="border:20px;background-color:white; border-radius:20px; padding:16px; align:center">
                                    <h4 style="color:black"><?php echo "<img src=images/".$row['img']. " width='280px' height='130px' "?></h4>
                                    <h4 style="color:black">name: <?php echo $row["name"] ?></h4>
                                    <h4 style="color:black">price: <?php echo $row["price"] ?> ₪</h4>
                                    <h4 style="color:black">code: <?php echo $row["code"] ?></h4>
                                    <h4 style="color:black">style: <?php echo $row["style"] ?></h4>
                                    <h4 style="color:black">type: <?php echo $row["type"] ?></h4>
                                    <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                                    <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                                    <input type="hidden" name="code" value="<?php echo $row["code"]; ?>" />
                                    </div>
                                </form>
                                </div>
                                <?php
                            }
                        }
                    }
                    else if(isset($_GET['sort_alphabet']))
                    {
                        $sort_option2 = "";
                        if($_GET['sort_alphabet'] == "a-z"){
                            $sort_option2 = "ASC";
                        }
                        elseif($_GET['sort_alphabet'] == "z-a"){
                            $sort_option2 = "DESC";
                        }
                        $query1 = "SELECT * FROM marble ORDER BY `name` $sort_option2";
                        $query_run1 = mysqli_query($conn, $query1);
                        if(mysqli_num_rows($query_run1) > 0)
                        {
                            foreach($query_run1 as $row)
                            {
                            ?>
                               <div class="col-md-4" >
                                <form method="post" action="newcart.php?code:<?php echo $row["code"]; ?>">
                                    <br>
                                    <div class="card" style="border:20px;background-color:white; border-radius:20px; padding:16px; align:center">
                                    <h4 style="color:black"><?php echo "<img src=images/".$row['img']. " width='280px' height='130px' "?></h4>
                                    <h4 style="color:black">name: <?php echo $row["name"] ?></h4>
                                    <h4 style="color:black">price: <?php echo $row["price"] ?> ₪</h4>
                                    <h4 style="color:black">code: <?php echo $row["code"] ?></h4>
                                    <h4 style="color:black">style: <?php echo $row["style"] ?></h4>
                                    <h4 style="color:black">type: <?php echo $row["type"] ?></h4>
                                    <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                                    <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                                    <input type="hidden" name="code" value="<?php echo $row["code"]; ?>" />
                                    </div>
                                </form>
                                </div>
                            <?php 
                            }
                        }
                    }
                    else if(isset($_GET['style']))
                    {   
                        $sort_option3 = "";
                        if($_GET['style'] == "glossy"){
                             $query5="SELECT * FROM marble WHERE style = 'glossy'";
                             $sort_option3 = mysqli_query($conn, $query5);
                        }
                        elseif($_GET['style'] == "matte"){
                            $query6="SELECT * FROM marble WHERE style = 'matte'";
                            $sort_option3 = mysqli_query($conn, $query6);
                        }
                        
                        if(mysqli_num_rows($sort_option3) > 0)
                        {
                            foreach($sort_option3 as $row)
                            {
                            ?>
                                <div class="col-md-4" >
                                <form method="post" action="newcart.php?code:<?php echo $row["code"]; ?>">
                                    <br>
                                    <div class="card" style="border:20px;background-color:white; border-radius:20px; padding:16px; align:center">
                                    <h4 style="color:black"><?php echo "<img src=images/".$row['img']. " width='280px' height='130px' "?></h4>
                                    <h4 style="color:black">name: <?php echo $row["name"] ?></h4>
                                    <h4 style="color:black">price: <?php echo $row["price"] ?> ₪</h4>
                                    <h4 style="color:black">code: <?php echo $row["code"] ?></h4>
                                    <h4 style="color:black">style: <?php echo $row["style"] ?></h4>
                                    <h4 style="color:black">type: <?php echo $row["type"] ?></h4>
                                    <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                                    <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                                    <input type="hidden" name="code" value="<?php echo $row["code"]; ?>" />
                                    </div>
                                </form>
                                </div>
                                <?php
                            }
                        }
                    }
                    else if(isset($_GET['type']))
                    {   
                        $sort_option4 = "";
                        if($_GET['type'] == "porcelain"){
                             $query8="SELECT * FROM marble WHERE `type` = 'porcelain'";
                             $sort_option4 = mysqli_query($conn, $query8);
                        }
                        elseif($_GET['type'] == "synthetic"){
                            $query9="SELECT * FROM marble WHERE `type` = 'synthetic'";
                            $sort_option4 = mysqli_query($conn, $query9);
                        }
                        
                        if(mysqli_num_rows($sort_option4) > 0)
                        {
                            foreach($sort_option4 as $row)
                            {
                            ?>
                               <div class="col-md-4" >
                                <form method="post" action="newcart.php?code:<?php echo $row["code"]; ?>">
                                    <br>
                                    <div class="card" style="border:20px;background-color:white; border-radius:20px; padding:16px; align:center">
                                    <h4 style="color:black"><?php echo "<img src=images/".$row['img']. " width='280px' height='130px' "?></h4>
                                    <h4 style="color:black">name: <?php echo $row["name"] ?></h4>
                                    <h4 style="color:black">price: <?php echo $row["price"] ?> ₪</h4>
                                    <h4 style="color:black">code: <?php echo $row["code"] ?></h4>
                                    <h4 style="color:black">style: <?php echo $row["style"] ?></h4>
                                    <h4 style="color:black">type: <?php echo $row["type"] ?></h4>
                                    <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                                    <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                                    <input type="hidden" name="code" value="<?php echo $row["code"]; ?>" />
                                    </div>
                                </form>
                                </div>
                                <?php
                            }
                        }
                    }
                    else if(isset($_SESSION['start'])&& $_SESSION['start']==0)
                    {   
                        $_SESSION['start']=1;
                        $query6="SELECT * FROM marble";
                        $sort_option3 = mysqli_query($conn, $query6);

                        if(mysqli_num_rows($sort_option3) > 0)
                        {
                            foreach($sort_option3 as $row)
                            {
                            ?>
                                <div class="col-md-4" >
                                <form method="post" action="newcart.php?code:<?php echo $row["code"]; ?>">
                                    <br>
                                    <div class="card" style="border:20px;background-color:white; border-radius:20px; padding:16px; align:center">
                                    <h4 style="color:black"><?php echo "<img src=images/".$row['img']. " width='280px' height='130px' "?></h4>
                                    <h4 style="color:black">name: <?php echo $row["name"] ?></h4>
                                    <h4 style="color:black">price: <?php echo $row["price"] ?> ₪</h4>
                                    <h4 style="color:black">code: <?php echo $row["code"] ?></h4>
                                    <h4 style="color:black">style: <?php echo $row["style"] ?></h4>
                                    <h4 style="color:black">type: <?php echo $row["type"] ?></h4>
                                    <input type="hidden" name="img" value="<?php echo $row["img"]; ?>" />
                                    <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                                    <input type="hidden" name="code" value="<?php echo $row["code"]; ?>" />
                                    </div>
                                </form>
                                </div>
                                <?php
                            }
                        }
                    }
                }
        ?>
	<br />
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<?php  require_once "footer.php" ?>
    </body>
</html>
