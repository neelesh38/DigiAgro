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
