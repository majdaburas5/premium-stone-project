<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* html,body{
  display: grid;
  height: 100%;
  place-items: center;
  background: #6665ee;
} */
::selection{
  color: #fff;
  background: #6665ee;
}
.skill-bars{
  padding: 25px 30px;
  width: 600px;
  background: #fff;
  box-shadow: 5px 5px 20px rgba(0,0,0,0.2);
  border-radius: 10px;
}
.skill-bars .bar{
  margin: 20px 0;
}
.skill-bars .bar:first-child{
  margin-top: 0px;
}
.skill-bars .bar .info{
  margin-bottom: 5px;
}
.skill-bars .bar .info span{
  font-weight: 500;
  font-size: 17px;
  opacity: 0;
  animation: showText 0.5s 1s linear forwards;
}
@keyframes showText {
  100%{
    opacity: 1;
  }
}
.skill-bars .bar .progress-line{
  height: 10px;
  width: 100%;
  background: #f0f0f0;
  position: relative;
  transform: scaleX(0);
  transform-origin: left;
  border-radius: 10px;
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.05),
              0 1px rgba(255,255,255,0.8);
  animation: animate 1s cubic-bezier(1,0,0.5,1) forwards;
}
@keyframes animate {
  100%{
    transform: scaleX(1);
  }
}
.bar .progress-line span{
  height: 100%;
  position: absolute;
  border-radius: 10px;
  transform: scaleX(0);
  transform-origin: left;
  background: #6665ee;
  animation: animate 1s 1s cubic-bezier(1,0,0.5,1) forwards;
}
.bar .progress-line.html span{
  width: 90%;
}
.bar .progress-line.css span{
  width: 60%;
}
.bar .progress-line.jquery span{
  width: 85%;
}
.bar .progress-line.python span{
  width: 50%;
}
.bar .progress-line.mysql span{
  width: 75%;
}
.progress-line span::before{
  position: absolute;
  content: "";
  top: -10px;
  right: 0;
  height: 0;
  width: 0;
  border: 7px solid transparent;
  border-bottom-width: 0px;
  border-right-width: 0px;
  border-top-color: #000;
  opacity: 0;
  animation: showText2 0.5s 1.5s linear forwards;
}
.progress-line span::after{
  position: absolute;
  top: -28px;
  right: 0;
  font-weight: 500;
  background: #000;
  color: #fff;
  padding: 1px 8px;
  font-size: 12px;
  border-radius: 3px;
  opacity: 0;
  animation: showText2 0.5s 1.5s linear forwards;
}
@keyframes showText2 {
  100%{
    opacity: 1;
  }
}
.progress-line.html span::after{
  content: "90%";
}
.progress-line.css span::after{
  content: "60%";
}
.progress-line.jquery span::after{
  content: "85%";
}
.progress-line.python span::after{
  content: "50%";
}
.progress-line.mysql span::after{
  content: "75%";
}
    </style>

<?php  require_once "nav_mang.php";
include "DB1connect.php";

?>



        <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                      
                        <?php 
                        $sum=0;
                        $sum1=0;
   
    $conn = mysqli_connect("localhost", "majd", "1234", "project1");
    


                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                  $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];
                                  
                                   
                                   //to show all orders from the date i selected to the date i selected also
                                      $query1="SELECT  o.order_number,o.order_date,o.customer_id,m.qty ,m.marble_code,c.code,c.name
                                      FROM `order` o,order_marble m ,marble c
                                      WHERE order_date BETWEEN '$from_date' AND '$to_date' AND  o.order_number=m.order_num AND c.code=m.marble_code";
                                    $query_run = mysqli_query($conn, $query1);
                                   
                                         foreach($query_run as $row)
                                        {
                                         
                                          $sum+=$row['qty'];
                                            ?>
                                          
                                                <?php    $marble_code[] = $row['marble_code'];
                                                         $marble_qty[] = $row['qty'];
                                                         $namee[]=$row['name'];
                                                         

                                                   ?>
                                                
                                                <?php 
                                                  }
  //this loops is to do sum for marble_code by the quantity 
    $qtyforeach[]="";
    $nameforeach[]="";
    $demo_array = array('' => '');
      
   for($x=0;$x<count($marble_code);$x++){
    for($y=0;$y<count($marble_qty);$y++){
    
      if($marble_code[$x]==$marble_code[$y]){
          $sum1+=$marble_qty[$y];
      }
    }
    $demo_array += [$namee[$x] => $sum1];
    $sum1=0;
    }
 
   
   }
        
   
  foreach($demo_array as $key => $value) { 
    $qtyforeach[]=$value;
    $nameforeach[]=$key;
    

} 
    ?>
</body>
</html>

<h1> from this date <?php echo $from_date?> to this date<?php echo $to_date?> we have sold  <?php echo $sum ?>  marble </h1>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>Document</title>


<div style="width:1500px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = <?php echo json_encode($nameforeach)?>;
var yValues = <?php echo json_encode($qtyforeach)?>;
var barColors = ["red", "green","blue","orange","brown","black","yellow","purple","pink","red","green","blue,","orange","brown","black","yellow"];

new Chart("myChart", {
  type: "horizontalBar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: ""
    }
  }
});
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>