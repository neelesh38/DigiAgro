<?php
session_start();
if(isset($_GET["text1"]))
{
$str=$_GET["text1"];

$str1=explode(" ",$str);
  $qty=$str1[0];
    $item=$str1[1];
    $price=$str1[2];

$link1=mysqli_connect("localhost","root","","cart");
if(mysqli_connect_error()){
    die( "there is connection error");
}

$id=$_SESSION['id'];

$query="SELECT * FROM cart_items WHERE id='$id' AND item_name='$item'";

$ans=mysqli_query($link1,$query);
//$row = mysqli_fetch_array($ans);
    if(mysqli_num_rows($ans)>0 && $qty!=0)
    {
        $query="UPDATE `cart_items` SET qty='$qty' WHERE id='$id' AND item_name='$item'";
         mysqli_query($link1,$query);

    }

    else{
    /*$query="UPDATE `products` SET qty='$qty' WHERE id='$index'";
    mysqli_query($link,$query);*/
     if($qty!=0)
    {
    $query1="INSERT INTO `cart_items`(`id`,`item_name`,`price`,`qty`) VALUES('$id','$item','$price','$qty')";

   mysqli_query($link1,$query1);
     }
    }
}
//$ans=$_GET['bottle_gourd 30 8'];
//echo $ans;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AgroPlus | Products</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="grains.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main-bg">
  <!-- Header -->
  <header>
    <div class="inner">
      <h1 class="logo"><a href="index.php">AgroPlus - Agriculture company</a></h1>
      <a href="cart.php"><img src="pics/cart1.png" align="right" style="width:50px;height:50px"></a>
      <a href="login.php"><img src="pics/home.png" align="right" style="width:50px;height:50px"></a>
      <nav>
        <ul class="sf-menu">
          <li><a href="index.php">home</a></li>
          <li><a href="vegetable.php">Vegetables</a></li>
          <li><a href="fruits.php">Fruits</a></li>
          <li class="current"><a href="grains.php">Grains</a></li>
          <li> <a href="technology.php">technology</a></li>
          <li><a href="contacts.php">contacts</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </header>
  <!-- Content -->
  <section id="content">
    <div class="container_24">
      <div class="wrapper">
        <div class="grid_24 content-bg">
          <div class="wrapper">
            <article class="grid_22 suffix_1 prefix_1 alpha omega">
              <h2>Our Grains</h2>
              <div class="wrapper indent-bot">
                <div class="grid_7 alpha">
                  <div class="wrapper"> <img src="pics/wheat.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Wheat</a> </dt>
                      <h6>Rs.50/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty1"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="wheat 50 1">Buy Now</button>
                    </dl>
                  </div>
                </div>
                <div class="grid_7">
                  <div class="wrapper"> <img src="pics/rye.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Rye</a> </dt>
                      <h6>Rs.30/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty2"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="rye 30 2">Buy Now</button>
                    </dl>
                  </div>
                </div>
                <div class="grid_7 omega">
                  <div class="wrapper"> <img src="pics/jowar.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Jowar</a> </dt>
                      <h6>Rs.35/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty3"  value=0  style="width:65px;">
                      <button type="button" class="btn btn-success" onclick="on()" id="jowar 35 3">Buy Now</button>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="wrapper indent-bot">
                <div class="grid_7 alpha">
                  <div class="wrapper"> <img src="pics/barley.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Barley</a> </dt>
                      <h6>Rs.70/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty4"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="barley 70 4">Buy Now</button>

                    </dl>
                  </div>
                </div>
                <div class="grid_7">
                  <div class="wrapper"> <img src="pics/bazra.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Bazra</a> </dt>
                      <h6>Rs.40/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty5"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="bazra 40 5">Buy Now</button>
                    </dl>
                  </div>
                </div>
                <div class="grid_7 omega">
                  <div class="wrapper"> <img src="pics/oats.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Oats</a> </dt>
                      <h6>Rs.80/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty6"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="oats 80 6">Buy Now</button>

                    </dl>
                  </div>
                </div>
              </div>
              <div class="wrapper hr-border-1 indent-bot-2">
                <div class="grid_7 alpha">
                  <div class="wrapper"> <img src="pics/maize.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Maize</a> </dt>
                      <h6>Rs.40/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty7"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="maize 40 7">Buy Now</button>

                    </dl>
                  </div>
                </div>
                <div class="grid_7">
                  <div class="wrapper"> <img src="pics/rice.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Rice</a> </dt>
                      <h6>Rs.60/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty8"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="rice 60 8">Buy Now</button>

                    </dl>
                  </div>
                </div>
                <div class="grid_7 omega">
                  <div class="wrapper"> <img src="images/page2-img9.jpg" alt="" class="img-indent">
                    <dl class="extra-wrap def-list-1">
                      <dt> <a href="#">Pumpkins</a> </dt>
                      <h6>Rs.15/kg</h6>
                      <h6>Qty:</h6>
                      <input type="number" min="0" id="qty9"  value=0  style="width:65px;"><br>
                      <button type="button" class="btn btn-success" onclick="on()" id="pumpkins 15 9">Buy Now</button>

                    </dl>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer>
    <div class="container_24">
      <div class="wrapper">
        <div class="grid_24 footer-bg">
          <div class="hr-border-2"></div>
          <div class="wrapper">
            <div class="grid_7 suffix_1 prefix_1 alpha">
              <div class="copyright"> &copy; 2012 <strong class="footer-logo">AgroPlus</strong>
              </div>
            </div>
            <div class="grid_4">
              <h5 class="heading-1">Links:</h5>
              <ul class="footer-list">
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Suggest Ideas</a></li>
                <li><a href="#">Support Forum</a></li>
              </ul>
            </div>
            <div class="grid_4">
              <h5 class="heading-1">Support:</h5>
              <ul class="footer-list">
                <li><a href="#">Special Proposition</a></li>
                <li><a href="#">Free Phone</a></li>
                <li><a href="#">Solutions</a></li>
              </ul>
            </div>
            <div class="grid_2 suffix_1 omega">
              <ul class="social-list">
                <li><a href="http://www.youtube.com"><img src="images/social-icon-1.png" alt=""></a></li>
                <li><a href="http://www.facebook.com"><img src="images/social-icon-2.png" alt=""></a></li>
                <li><a href="http://www.twitter.com"><img src="images/social-icon-3.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<div id="overlay" >
<div id="text" >
<p>Product Details</p>
<hr>
<img src=" " id="image" height="100px" width="100px">
<div>
<br>
<h6 id="info" name="info"></h6>
<h6 id="rupe"></h6>
<h6 id="qtty"></h6>
</div>
<hr>
<span class="shopping" id="shop" onclick="off()">Proceed to Shopping!</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="shopping" id="shop" onclick="closed()">Close</span>
 </div>
</div>

 <form method="get" id="jsform">
     <input type="hidden" id="text1" name="text1">
 </form>
 <script src='products.js'></script>
</body>
</html>
