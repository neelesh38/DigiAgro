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
    
?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="order.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    
    <div class="home"><a href="index.php"><img src="pics/home.png" height="30px" width="30px"></a>
       
    <?php
    
  

echo '<div class="container">
    <div  id="sign_in">
        <div id="bold">
        <h1>Enter a Delivery Address</h1>
      </div>      
        <form method="post">
            <label>Full Name</label>
            <input type="text" class="form-control" id="user" placeholder="full name"  value='.$row['name'].'>
            <label>Phone No.</label>
            <input type="text" class="form-control username" id="username1" placeholder="phone no" name="phone">
             <label>Pin Code</label>
            <input type="text" class="form-control" id="user" placeholder="pin code" name="pin">
            <label>Address</label>
            <textarea  class="form-control password" id="password1" name="address"></textarea>        
           <!-- <input type="checkbox"  id="check" name="check" value=1><span id="stay" >Stay Logged in</span><br> -->
           
            <button class="btn btn-primary sign" id="order" value="1" 
            type="submit" >Order</button>
            
        </form>
      </div>
      
      </div> '
        ?>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  
    <script>
        $("#order").click(function(){  
            alert("Your order has been placed");
            //header("Location:agro_web.php");
           //window.location.href="agro_web.php";
           
        });
    
    </script>
</body>
    
</html>
