<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
    echo 'Not connected';
}
if (!mysqli_select_db($con,'demo'))
{
    echo 'Database Not Selected';
}

                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $cardname = $_POST['namecard'];
                $num = $_POST['num'];
                $expmonth = $_POST['expm'];
                $expyear = $_POST['expy'];
                $cvv = $_POST['cvv'];
$sql = "insert into check (name,email,address,cardname,cardnumber,expmonth,expyear,cvv) values ('$name','$email','$address','$cardname','$num','$expmonth','$expyear','$cvv')";

if(!mysqli_query($con,$sql)){
    header("location:dogki3.php?");
}
else
{
   header("location:dogki3.php?");
}


?>