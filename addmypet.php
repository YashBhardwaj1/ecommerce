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
$category = $_POST['cat'];
$sex = $_POST['gender'];
$color = $_POST['color'];
$age = $_POST['age'];
$image = $_POST['pic'];
$email = $_POST['email'];

$sql = "insert into shaadi (name,category,sex,color,age,image,email) values ('$name','$category','$sex','$color','$age','$image','$email')";

if(!mysqli_query($con,$sql)){
    echo 'Not inserted';
}
else
{
   header("location:dogki.php? ");
}
?>
