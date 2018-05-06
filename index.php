<?php
$error='';
session_start();
if(array_key_exists("submit",$_POST))
{

    $link=mysqli_connect("localhost","root","","login_agro");

    if(mysqli_connect_error()){
        die( "there is connection error");
        }

$email=$_POST['username'];
$pass=$_POST['password'];
$user=$_POST['user'];
echo $email;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AgroStore</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
<script>
$(document).ready(function(){
  $('#exampleModal').modal('show');
});

$(document).ready(function(){
  $('#sign1').click(function(){
    var user = $('#user').val();
    var username = $('#username').val();
    var password = $('#password').val();
    if(user !='' && username!='' && password !='')
    {
         $.ajax({
           url:"action.php",
           method:"POST",
           data:{user:user,username:username,password:password},
           success:function(data){
             
           }

         })
    }
    else {
      alert('both field reqired');

    }

  });
})
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css">
<![endif]-->
</head>
<body>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Username:</label>
            <input type="text" class="form-control" id="user" name="user">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Email:</label>
            <input type="email" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary sign" id="sign1" value="1" name="submit">Register!</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
    </div>
  </div>
</div>
<div class="main-bg">
  <header>
    <div class="inner">
      <h1 class="logo"><a href="index.php">AgroStore - Agriculture company</a></h1>
      <a href="cart.php"><img src="pics/cart1.png" align="right" style="width:50px;height:50px"></a>
      <a href="login.php"><img src="pics/home.png" align="right" style="width:50px;height:50px"></a>
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.php">home</a></li>
          <li><a href="vegetable.php">Vegetables</a></li>
          <li><a href="fruits.php">Fruits</a></li>
          <li><a href="grains.php">Grains</a></li>
          <li> <a href="technology.php">technology</a></li>
          <li><a href="contacts.php">contacts</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="slider-container">
      <div class="mp-slider">
        <ul class="items">
          <li><img src="images/slide-1.jpg" alt="">
            <div class="banner mp-ban-1"><span class="row-1">putting our</span><span class="row-2">heart &amp; soul</span><span class="row-3">into the field</span></div>
          </li>
          <li><img src="images/slide-2.jpg" alt="">
            <div class="banner mp-ban-2"><span class="row-1">we have a strong</span><span class="row-2">agriculture</span><span class="row-3">heritage</span></div>
          </li>
          <li><img src="images/slide-3.jpg" alt="">
            <div class="banner mp-ban-3"><span class="row-1">growing clean</span><span class="row-2">and full of health</span><span class="row-3">products</span></div>
          </li>
        </ul>
      </div>
    </div>
    <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </header>
  <!-- Content -->
  <section id="content">
    <div class="container_24">
      <div class="wrapper">
        <div class="grid_24 content-bg">
          <div class="wrapper">
            <div class="grid_16 suffix_1 prefix_1 alpha">
              <article class="indent-bot">
                <h2>Our products:</h2>
                <div class="wrapper hr-border-1">
                  <div class="grid_4 alpha"> <img src="images/page1-img1.jpg" class="img-indent-bot" alt="">
                    <dl class="def-list-1">
                      <dt> <a href="#">Tomatoes</a> </dt>
                      <dd>Tomatoes are now the fourth most popular fresh-market vegetable behind potatoes, lettuce, and onions.  </dd>
                    </dl>
                  </div>
                  <div class="grid_4"> <img src="images/page1-img2.jpg" class="img-indent-bot" alt="">
                    <dl class="def-list-1">
                      <dt> <a href="#">Indian Eggplant</a> </dt>
                      <dd>The raw fruit can have a somewhat bitter taste, or even an astringent quality, but becomes tender when cooked and develops a rich, complex flavor.</dd>

                    </dl>
                  </div>
                  <div class="grid_4"> <img src="images/page1-img3.jpg" class="img-indent-bot" alt="">
                    <dl class="def-list-1">
                      <dt> <a href="#">Cabbage</a> </dt>
                      <dd>Cabbage heads generally range from 0.5 to 4 kilograms (1 to 9 lb), and can be green, purple or white. </dd>
                    </dl>
                  </div>
                  <div class="grid_4 omega"> <img src="images/page1-img4.jpg" class="img-indent-bot" alt="">
                    <dl class="def-list-1">
                      <dt> <a href="#">Potatoes</a> </dt>
                      <dd>Potatoes have become a staple food in many parts of the world and an integral part of much of the world's food supply,Potatoes are the world's fourth-largest food crop</dd>
                    </dl>
                  </div>
                </div>
                <div class="alignright"> <a href="#" class="button">Read more</a> </div>
              </article>
              <article class="banner-box">
                <div class="inner">
                  <h3>“ AGROZONES – A WAY TO BUY AGRICULTURAL PRODUCTS ONLINE”</h3>
                  <h4>Here we come to act as a bridge between the sellers and the buyers of agricultural products.

                                                       <p>Save Time!</p>              <p>Save Energy!</p>
                  </h4>
                  <blockquote class="quote indent-right"> <strong>Your busy schedule prohibits you from being able to get to the market (or) merchant and buy the product. Agrozones paves way to make the task easier </blockquote>
                  <div class="alignright indent-right"> <span class="author"> <i></i></span> </div>
                </div>
                <img src="images/banner-box-img.png" alt="" class="banner-box-img"> </article>
            </div>
            <div class="grid_5 suffix_1 omega">
              <article class="indent-bot-1">
                <h2 class="heading-1">Welcome!</h2>
                <p class="p1"> <strong> AgroPlus is a user friendly website</strong> </p>
                <p class="hr-border-1"> Our Mission is to serve as a catalyst for institutions and individuals in agriculture and rural development to share knowledge, learn from others, and improve decision making about the vital role of ICTs to empower rural communities, improve rural livelihoods and create abalance bbetween a customer and seller.</p>
              </article>
              <article>
                <h2>Our programs:</h2>
                <ul class="list-1">
                  <li><a href="#">Agronomic Practices</a></li>
                  <li><a href="#">Biotechnology</a></li>
                  <li><a href="#">Biotechnology Research</a></li>
                  <li><a href="#">Benefits of Biotechnology</a></li>
                  <li><a href="#">The Regulatory Process</a></li>
                  <li><a href="#">Breeding</a></li>
                  <li><a href="#">Learning Centers</a></li>
                </ul>
              </article>
            </div>
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
              <div class="copyright"> &copy; 2018 <strong class="footer-logo">AgroPlus</strong>
              </div>
            </div>
            <div class="grid_4">
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
</body>
</html>
