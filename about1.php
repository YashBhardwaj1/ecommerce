<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<html>
<head>
    <title>::Doggie Woggie::</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel ="stylesheet">
    <link href = "fa/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script>
$(document).ready(function(){	
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Adding...'); //Loading button text 

			$.ajax({ //make ajax request to cart_process.php
				url: "cart_process.php",
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
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	});
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(); //close cart-box
	});
	
	//Remove items from cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	});

});
</script>

    
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            <div id="subheader">
        <div class="container">
                <p>Dog shopping site</p>
            <a href="#">MYACCOUNT</a><a href="login.html">LOGOUT</a><a href="AdminLogin.php">AdminLogin</a>
                </div>
                </div>
            <!--Main header-->
            <div id="main-header">
                <!---Logo-->
            <div id="logo">
                <span id="ist">DoggieWoggie</span><span id = "iist"></span>
                </div> 
                
                <!--Search Area-->
                <div id="search">
                
                    <form class="Search" action="login.html" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For page">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                    <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                    
                    
                    </form>
                </div>
                <!--User-menu-->
                <div id="user-menu">
                <!--<a href="#" class="cart-box" id="cart-info" title="View Cart">-->
<?php 
if(isset($_SESSION["products"])){
	echo count($_SESSION["products"]); 
}else{
	echo 0; 
}
?>                     

</a>
                
                </div>
            </div>
            </div>
            <div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Close</a>
<h3>Your Shopping Cart</h3>
    <div id="shopping-cart-results">
    </div>
</div>  
            <!--Navigation-->
            <div id="navigation">
            <a href="#" class="menu-togglr"><i class="fa fa-bars"></i></a>
            <nav id = "mainav">
                <a href="home1.php">Home</a>
                <a href='indexx1.php'>Adopt a pet</a>     
                <a href="sell2.php">Sell a Pet</a>
                <a href="spa3.php">Pet Spa</a>
                <a href="dogki.php">Dog Ki Shaadi</a>
                <a href="encylopedia1.php">Breed Encylopedia</a>
                <a href="name1.php">Name Your Dog</a>
                <a href="about1.php">About</a>
                
                </nav>    
            
            
            </div>
            <!---Home slider--->
            <div id="slider">
                
            </div>
            <div class="container">
            <div id="heading-block">
                <h3>FOUNDER CONVENER</h3>   
                </div>
                
            <div class="catbox1">
                <img src="images/unnamed.jpg" alt="adopt a pet">
            </div>
                
            <div class="catbox1">
                <img src="images/yash2.jpg" alt="adopt a pet">
            </div>
                
            <div class="catbox1">
                <img src="images/yash3.jpg" alt="adopt a pet">
            </div>  
            <div class="catbox2">
                <h3>Introduction to Yash Bhardwaj</h3>    
            <p> An ardent animal lover..an amid pet enthusiast and an honarary canine expert carrying forward the legacy from 3rd generation involved deeply n actively since 5 years and has revolutionised the pet industry in Rajasthan being the pionner to introduce and organise Pet Industry on a never before level and now on a mission and vision to be the global leaders in Canine revolution .</p> 
                </div>
             
        </div>
            
        </div>
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/my.js"></script>    
            
    </body>
  
</html>