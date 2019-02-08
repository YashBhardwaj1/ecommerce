<?php 
require_once('config.php');
session_start();
    if(isset($_POST['login']))
    {
        if(empty($_POST['email']) || empty($_POST['psw']))
       {
            header("location:login.html.php?Empty= Please Fill in the Blanks");
       }
   else
       {
            $query="select * from loginform where email='".$_POST['email']."' and psw='".$_POST['psw']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                header("location:dogki.php?");
            }
            
            else
            {
                header("location:login.html?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>

?>