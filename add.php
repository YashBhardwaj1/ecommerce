<?php
 
include 'connection.php';
 error_reporting(0);
  $email = $_POST['email'];
  $pass = $_POST['psw'];
  
if(!$_POST['submit']){
	// you can remove this echo code and add alert using JS or use required tag in your input feilds.
	
  echo "All feilds must be filled";
  
}

else {
 // insert into tableName (feilds) values (variables) If still you cant understand please check videos on my youtube channel NOSGENE or comment there so i can help you
 
$sql = "INSERT INTO loginform (email,psw)
VALUES ('$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Add Data</title>
</head>

<body>
   
	<h2>Add Updates from this menu</h2>
		<form action="add.php" method="POST">
			Email: <input type="email" name="email" value="" required><br><br>
			Password: <input type="text"  name="psw" value="" required><br>
	<br>
            <input type="submit" name="submit" value="add"/>
    </form>
    
</body>

<!--
	Similarly you can make delete and updates pages with little changes in sql query and here and there. If you need to learn those too
	please check my youtube channel NOSGENE as i am running a full stack web development course there right now.
 -->

 <!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</html>