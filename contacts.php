<!DOCTYPE html>
<html lang="en">
<head>
<title>AgroPlus | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
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
      <h1 class="logo"><a href="index.php">AgroStore - Agriculture company</a></h1>
      <nav>
        <ul class="sf-menu">
          <li><a href="index.php">home</a></li>
          <li><a href="vegetable.php">Vegetables</a></li>
          <li><a href="fruits.php">Fruits</a></li>
          <li><a href="grains.php">Grains</a></li>
          <li> <a href="technology.php">technology</a></li>
          <li class="current"><a href="contacts.php">contacts</a></li>
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
            <article class="grid_6 suffix_1 prefix_1 alpha">
              <h2>Contact info:</h2>
              <p class="p1"> <strong class="str-2"> AgroPlus </strong>
              <dl class="adress">
                <dt>Chitkara University,Punjab</dt>
                <dd><span>Telephone:</span><b>+91 702 700 7117</b></dd>
                <dd><span>Fax:</span><b>+91 504 889 9898</b></dd>
                <dd><span>Email:</span><a href="#">harshsharma9467@gmail.com</a></dd>
              </dl>
              <dl class="adress">
                <dt>9863 Mill Road, Cambridge, MG09 99HT</dt>
                <dd><span>Telephone:</span><b>+91 959 603 6035</b></dd>
                <dd><span>Fax:</span><b>+91 504 889 9898</b></dd>
                <dd><span>Email:</span><a href="#">123@gmail.com</a></dd>
              </dl>
              <p></p>
            </article>
            <article class="grid_15 suffix_1 omega">
              <h2>Contact form:</h2>
              <form action="#" id="contact-form" method="post">
                <fieldset>
                  <label class="name"> <span>Full name:</span>
                    <input type="text">
                  </label>
                  <label class="email"> <span>Email:</span>
                    <input type="email">
                  </label>
                  <label class="message"> <span>Message:</span>
                    <textarea></textarea>
                  </label>
                  <div class="btns"> <button class="btn btn-primary sign" id="order" value="1" 
            type="submit" >Send</button></div>
                </fieldset>
              </form>
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
              <div class="copyright"> &copy; 2018 <strong class="footer-logo">AgroPlus</strong>
              </div>
            </div>

              </ul>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  
    <script>
        $("#order").click(function(){  
            alert("Your Mail has been send");
            //header("Location:agro_web.php");
           //window.location.href="agro_web.php";
           
        });
    
    </script>
</body>
</html>
