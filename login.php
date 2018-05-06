<?php
$error='';
session_start();
if(array_key_exists("submit",$_POST))
{

    $link=mysqli_connect("localhost","root","","login_agro");

    if(mysqli_connect_error()){
        die( "there is connection error");
        }

    if($_POST['register']=='1')
    {

$email=$_POST['username'];
$pass=$_POST['password'];
    $user=$_POST['user'];
if($email==''){
    $error.='Enter email address<br>';
}
    if($user==''){
    $error.='Enter Your Name<br>';
}
if($pass==''){
    $error.='Enter password';
}
    $query="SELECT id FROM register_agro WHERE email='".mysqli_real_escape_string($link,$_POST['username'])."'";
$ans=mysqli_query($link,$query);

    if(mysqli_num_rows($ans)>0)
    {
        $error.="you are already registered";
    }
    else{
    $query="INSERT INTO `register_agro`(`name`,`email`,`password`) VALUES('".mysqli_real_escape_string($link,$_POST['user'])."','".mysqli_real_escape_string($link,$_POST['username'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";

    if(mysqli_query($link,$query)){
       /*if($a=="http://localhost:8181/agro/agro_web.php"){*/
        $query="SELECT id FROM register_agro WHERE email='".mysqli_real_escape_string($link,$_POST['username'])."'";

$ans=mysqli_query($link,$query);
        $row = mysqli_fetch_array($ans);

         $_SESSION['id']=$row['id'];
        header("Location:index.php");/*
        }
        else
        {
            header("Location:buy_grain.php");
        }
    }*/
    }
        else{
            echo "please try again later";
        }

    }

}

    else{

$email=$_POST['username'];
$pass=$_POST['password'];
if($email==''){
    $error.='Enter email address<br>';
}
if($pass==''){
    $error.='Enter password';
}
     $query="SELECT * FROM register_agro WHERE email='".mysqli_real_escape_string($link,$_POST['username'])."'";

 $result = mysqli_query($link, $query);

                    $row = mysqli_fetch_array($result);

                    if (isset($row)) {
        $hashedPassword = $_POST['password'];
                        if ($hashedPassword == $row['password']) {
                            $_SESSION['id']=$row['id'];

                            echo $_SESSION['user_name'];

        header("Location:index.php");
        }

        else{
              $error = "That email/password combination could not be found.";
        }

        }
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <style type="text/css">
          html{
              background: url(pics/nature1.jpg)  no-repeat center center fixed;
              background-size: cover;
              -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;

          }
          body{
              background: none;
              font-family: sans-serif;
          }
          .container{
              text-align: center;
              margin-top: 100px;
              width:400px;

          }
          #bold{
              font-weight: bold;
          }
          #user{
              margin-bottom: 20px;
          }
          .username{
              margin-bottom: 20px;
          }
           .password{
              margin-bottom: 20px;
          }
          #check{
              margin: 0px auto;
          }
          #stay{
              margin-left: 10px;
          }
          .sign{
              margin: 15px 0px;
          }
          .link{
              color:white;
          }
          .loged_in{
              display: none;
          }

      </style>
  </head>
  <body>
      <div class="container">
    <div  id="sign_in">
        <div id="bold">
        <h1>Register</h1>
      </div>
        <p id="text">Interested to Buy? Register now</p>
        <div id="alert"><?php
            if($error!=''){
            echo '<div class="alert alert-warning" role="alert">'.$error.'</div>';
            }
            ?>
        </div>
        <form method="post">

            <input type="text" name="user" class="form-control" id="user" placeholder="username">

            <input type="email" name="username" class="form-control username" id="username1" placeholder="email">

               <input type="password" name="password" class="form-control password" id="password1" placeholder="password">

           <!-- <input type="checkbox"  id="check" name="check" value=1><span id="stay" >Stay Logged in</span><br> -->


            <input type="hidden" value="1" name="register">

            <button class="btn btn-primary sign" id="sign1" value="1" name="submit">Register!</button>

        </form>
        <a href="#" class="link">Log in</a>
      </div>


    <div class="loged_in " id="log_in">
        <div id="bold">
        <h1>Log In</h1>
      </div>
        <p id="text">Log in using your username and password!</p>
        <div id="alert"><?php
            if($error!=''){
            echo '<div class="alert alert-warning" role="alert">'.$error.'</div>';
            }
            ?>
        </div>
        <form method="post">

            <input type="email" name="username" class="form-control username" id="username2" placeholder="email">

               <input type="password" name="password" class="form-control password " id="password2" placeholder="password">

          <!--  <input type="checkbox"  id="check" name="check" value=1><span id="stay" >Stay Logged in</span><br> -->

            <input type="hidden" value="0" name="register">

            <button class="btn btn-primary sign" id="sign2" value="1" name="submit">Log in!</button>

        </form>
        <a href="#" class="link">Register</a>
      </div>


      </div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

      <script type="text/javascript">


          $('.link').click(function(){
              $("#sign_in").toggle();
              $("#log_in").toggle();


          });




      </script>
  </body>
</html>
