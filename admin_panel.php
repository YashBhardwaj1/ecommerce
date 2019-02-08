<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<html>
<head>
<title>Admin Panel - Yash </title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    
    
    <script>
$(document).ready(function(){	
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Adding...'); //Loading button text 

			$.ajax({ //make ajax request to cart_process.php
				url: "sold.php",
				type: "POST",
				dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data){ //on Ajax success
				$("#cart-info").html(data.items); //total items in cart-info element
				button_content.html('Add to Cart'); //reset button text to original text
				alert("Item added to Cart!"); //alert user
				if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
					$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
				}
			})
			e.preventDefault();
		});

	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "sold.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	});
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(); //close cart-box
	});
	
	//Remove items from cart
	

});
</script>

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
     <li><a href="soldd.php" target="_blank"> Sold item Details </a></li>
 </ul>	
</div>
                   
 <div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Close</a>
<h3>Sold Item Details</h3>
    <div id="shopping-cart-results">
    </div>
</div>  

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM loginform";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["ID"]. "<br>" .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["psw"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>
<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</body>
</html>