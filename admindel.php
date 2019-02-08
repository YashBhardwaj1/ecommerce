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


  $id = $_POST['id'];
  

$sql = "delete from products_list where id = $id ";

if(!mysqli_query($con,$sql)){
    echo 'Not deleted';
}
else
{
  echo 'Deleted';
}

?>
