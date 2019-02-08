<?php
require_once('config.php');
session_start();
    
$name = $_POST['email'];
$pass = $_POST['psw'];

$q = "select * from loginform where email='".$_POST['email']."' and psw='".$_POST['psw']."'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
     echo "Username Already Exists!!!";
}else{
    
    $qy = "insert into loginform(email,psw) values ('$name' , '$pass')";
    mysqli_query($con,$qy);
    header("location:login.html?");
}
   






?>