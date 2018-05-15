<?php
session_start();
$link=mysqli_connect("localhost","root","","cart");
if(mysqli_connect_error()){
    die( "there is connection error");
}
$id=$_SESSION['id'];
$query="SELECT * FROM cart_items WHERE id='$id'";
$ans=mysqli_query($link,$query);

if(isset($_GET["text1"]))
{
   $link=mysqli_connect("localhost","root","","cart");
    $name=$_GET["text1"];

    $query="UPDATE `cart_items` SET `qty`=0 WHERE `item_name`='$name' AND  `id`='$id'";
    mysqli_query($link,$query);
     header("Location:cart.php");
}

//header("Refresh:0");
?>
<html>
<head>

     <link rel="stylesheet" type="text/css" href="cart.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>


        <div class="home"><a href="index.php"><img src="pics/home.png" height="30px" width="30px"></a></div>


        <div class="container head">
            <br>
            <h1 id="cart">Cart</h1>
            <hr>
            <div>
                <div class="name"></div>
           <div class="name">Item Name</div>
           <div class="name">Price</div>
            <div class="name">Quantity</div>
            </div>

                <div class="names">
               <?php
                    $sum=0;

            while ($row = mysqli_fetch_assoc($ans)) {
                 /* $query1="DELETE FROM cart_items
WHERE item_name IS NULL";
                $ans1=mysqli_query($link,$query1);
                if(mysqli_num_rows($ans)>0*/
               if($row["item_name"]=='' || $row["qty"]==0)
               {}
                else{

            echo "<div class='info_head'><div class='info'><img src='pics/".$row["item_name"].".jpg' class='pic'/></div>
            <div  class='info'>".$row["item_name"]."</div>
            <div class='info'>".$row["price"]."</div>
            <div class='info'>".$row["qty"]."</div>
            <div class='info'><img src='pics/wrong.png' height='20px' width='20px' class='cross' name=".$row["item_name"].">
            </div>
            </div>
            ";
                $sum=$sum+($row["price"]*$row["qty"]);
                }
            }


                    echo "<div class='sum'><h5>Total : ".$sum."</h5></div>";


        ?>
           <div class='sum butt'>
               <a href='order.php' >
               <button class='btn btn-success'>Place Order
                  </button> </a></div>

                 <!--<div class="price">
               /*
                     $query="SELECT * FROM products WHERE id>0";$ans=mysqli_query($link,$query);
                     while ($row = mysqli_fetch_assoc($ans)) {
    echo $row["rupees"]."  ";*/
></div>-->
            </div>
        </div>
         <form method="get" id="jsform">
                <input type="hidden" id="text1" name="text1">
            </form>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

         <script>
               $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 320) { // check if user scrolled more than 50 from top of the browser window
          $(".fixed-top").css("background-color", "	 #99ccff"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".fixed-top").css("background-color", "red"); // if not, change it back to transparent
        }
      });
    });


            $(".cross").click(function()
                                    {
                document.getElementById("text1").value=this.name;
                 document.getElementById('jsform').submit();
            });
        </script>
</body>
</html>
