<?php

session_start();

$link=mysqli_connect("localhost","root","","login_agro");
if(mysqli_connect_error()){
    die( "there is connection error");
}
$id=$_SESSION['id'];
$query="SELECT * FROM register_agro WHERE id=$id";
$ans=mysqli_query($link,$query);
        $row = mysqli_fetch_array($ans);


//date_default_timezone_set("Asia/Kolkata");

//$d1=date("hi");
//$_SESSION['d1']=($_SESSION['d1']) ? $_SESSION['d1']+1 : 1; 

$link1=mysqli_connect("localhost","root","","cart");
$query="INSERT INTO `bill` (id,item_name,price,qty) SELECT id,item_name,price,qty FROM `cart_items` WHERE id='$id'";
mysqli_query($link1,$query);


//$d=$_SESSION['d1'];
  //$query="UPDATE `bill` SET `order_id`='$d' WHERE `id`='$id'";
    //mysqli_query($link1,$query);


   $query="DELETE FROM `cart_items` WHERE `id`='$id'";
   mysqli_query($link1,$query);

$query="SELECT * FROM `bill` WHERE id='$id'";   
$ans1=mysqli_query($link1,$query);
?>




<html>
<head>

     <link rel="stylesheet" type="text/css" href="bill.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
     <script type="text/javascript">
    fucntion func()
      {
          alert("Your order has been placed");
      }
    </script>
   
</head>
    
<body onload="func()">
   
    <div class="home"><a href="agro_web.php"><img src="pics/home.png" height="30px" width="30px"></a>
        <span class="log-out"><a href="login.php" class="log-out">Log Out</a></span>
    </div>
     <div class="container head">
         <div class="left">
             <?php
             echo "
             <div class='per'>Name : ".$row['name']."</div>
             <div class='per'>Email : ".$row['email']."</div>
             <div class='per'>Phone No. ".$row['phone']."</div>
             <div class='per'>Pin ".$row['pin']."</div>
             <div class='per'>Address : ".$row['address']."</div>
             ";
             ?>
         </div>
        '
         <hr>
         <div class="desc">
             <div class="name">Item Name</div>
           <div class="name">Price</div>
            <div class="name">Quantity</div>
            </div>
           
                <div class="names">
               <?php    
                    $sum=0;
                    
            while ($row1 = mysqli_fetch_assoc($ans1)) {
                 if($row1["qty"]==0)
               {}
                else{
                    
               
            echo "<div class='info_head'>
            <div  class='info'>".$row1["item_name"]."</div>
            <div class='info'>".$row1["price"]."</div>
            <div class='info'>".$row1["qty"]."</div>
            </div>
            ";                   
                $sum=$sum+($row1["price"]*$row1["qty"]);
            }

            }
                    echo "<div class='sum'><h5>Total : ".$sum."</h5></div>";
                    
                    
        ?>
         </div>
    </div>
   
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
 
</body>
    
</html>
