<html>
<head>
<title>Admin Panel - Yash </title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css">
    
</head>


<body>



<div id="header">
<center><img src="images/admin_icon.png">
<h3> Welcome to Admin Panel</h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add1.php" target="_blank"> Add In Adopt a Pet </a></li>
	<li><a href="Delete.php" target="_blank"> Delete In Adopt a Pet </a></li>
	<li><a href="details.php" target="_blank"> Adopt a Pet Details </a></li>
     <li><a href="add.php" target="_blank"> Add a User </a></li>
     <li><a href="del1.php" target="_blank"> Delete a User </a></li>
     <li><a href="shaadidetails.php" target="_blank"> Dog Ki Shaadi Details </a></li>
     <li><a href="del2.php" target="_blank"> Delete shaadi </a></li>
     <li><a href="admin_panel.php" target="_blank"> User Details </a></li>
     <li><a href="soldd.php" target="_blank"> Sold Item Details </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php 
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM sold";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["ID"]. "<br>" .  "Name: " . $row["product_name"] .  "<br>" . "Description: " . $row["product_desc"]. "<br>" .  "Code: " . $row["product_code"] . "<br>" .  "Image: " . $row["product_image"] . "<br>" .  "Price: " . $row["product_price"] .       "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>
    
     
</body>
</html>
<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
