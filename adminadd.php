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
  $desc = $_POST['desc'];
  $code = $_POST['code'];
  $image = $_POST['image'];
  $price = $_POST['price'];
  $id = $_POST['id'];

$sql = "insert into products_list (id,product_name,product_desc,product_code,product_image,product_price) values ('$id','$name','$desc','$code','$image','$price')";

if(!mysqli_query($con,$sql)){
    echo 'Not inserted';
}
else
{
  echo 'Inserted';
}

?>
