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


  $id = $_POST['ID'];
  

$sql = "delete from loginform where ID = $id ";

if(!mysqli_query($con,$sql)){
    echo '';
}
else
{
  echo 'Deleted';
}

?>
<html>
<head>
<title>Delete Data</title>
</head>

<body>
   
	<h2>CHOOSE ID TO DELETE</h2>
		<form action="del1.php" method="POST">
			
			ID: <input type="number" name="ID" value="" required><br><br>
            
	
            <input type="submit" name="submit" value="Delete">
    </form>
</body>

</html>

