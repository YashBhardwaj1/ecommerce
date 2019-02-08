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
            <a href="login.html">Login</a><a href="login.html">Register</a><a href="maps.php">Maps</a>
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
                
                    <form class="Search" action="spa1.php" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For page">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                    
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
                <a href="home.php">Home</a>
                <a href='indexx.php'>Adopt a pet</a>     
                <a href="sell1.php">Sell a Pet</a>
                <a href="spa1.php">Pet Spa</a>
                <a href="dogki2.php">Dog Ki Shaadi</a>
                <a href="encylopedia.php">Breed Encylopedia</a>
                <a href="name.php">Name Your Dog</a>
                <a href="about.php">About</a>
                
                </nav>
            
            
            </div>
            <!---Home slider--->
            <div id="slider">
                
            </div>
            <div class="container">
            <div id="heading-block">
                                
                <h3>SELL YOUR PET</h3>   
                </div>
            </div>
            <div class="row">
            <div class="column left2">
                <div class="catbox">
                <img src="images/adopt1.jpg">
                    <span>AVAILABLE DISCOUNTS</span>
                </div>
                </div>
            <div class="column right2">
                <form name="myForm" onsubmit="return validateForm()" action="sell.php" method="post">
                 
                 <br><br><input style="margin-left: 20px" type="radio" name = "KCI" value="KCI" checked>KCI REGISTERED
                 <input type="radio" name = "KCI" value="NON KCI" > NON KCI REGISTERED<br><br> 
                    
                    <label style="margin-left: 20px; margin-bottom: 10px;">Breed:</label>
                 <select style="width: 30%;height: 5%; margin-left: 20px" name="breed">
                 <option value="Affenpinscher">Affenpinscher</option>
                 <option value="Akita">Akita</option>
                 <option value="Afghan">Afghan Hound</option>
                 <option value="Australian">Australian Cattle Dog</option>
                 <option value="Pomerian">Pomerian</option>      
                  </select><br>
                 
                <br><label style="margin-left: 20px;">Color:</label>
                <select style="width: 20%;height: 5%" name="color">
                 <option value="black">Black</option>
                 <option value="white">White</option>
                  </select >
        
                <label style="margin-left: 25px">Sex:</label>
                 <input style="margin: 5px;" type="radio" name = "gender" value="male" checked>Male
                 <input style="margin: 5px;" type="radio" name = "gender" value="female" > Female<br><br>
                    
                <label style="margin-left: 20px;">Age in Months:</label>
                <input style="width: 10%;height:5%; text-align: center" type="text" name="age" required >  
                
                <label style="margin-left: 20px;">No. of Pups:</label>
                <input style="width: 10%;height:5%; text-align: center" type="text" name="num" required><br><br>    
                    
                <label style="margin-left: 20px;">Upload Image:</label>
                <input type = "file" name="pic" accept="image/*" required> <br><br>
                    
                <label style="margin-left: 20px;">Your Name:</label>
                <input style="width: 50%;height:5%; text-align: center;margin-left: 38px" type="text" name="name" required><br><br>
                
                <label style="margin-left: 20px;">Your Email:</label>
                <input style="width: 50%;height:5%; text-align: center ;margin-left: 40px" type="email" name="email" required> <br><br>
                
                <label style="margin-left: 20px;">Your Number:</label>
                <input style="width: 50%;height:5%; text-align: center;margin-left: 20px;" type="number" name="number" required>     
                    
                <br><br>
                    <button onclick="validateForm()" class="send1" type="submit">Send</button>
                    
                    
                 </form> 
                
                
                </div>
            </div>
        </div>
                
                
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/my.js"></script> 
        
                        <script >
                        function validateForm() {
                        var x = document.forms["myForm"]["age"].value;
                        var y = document.forms["myForm"]["num"].value;
                        var z = document.forms["myForm"]["name"].value;
                        var a = document.forms["myForm"]["email"].value;    
                        var b = document.forms["myForm"]["number"].value;
                        var c = document.forms["myForm"]["pic"].value;    
                            
                        if (x == "") {
                        alert("Age must be filled out");
                        return false;
                        }
                         
                        if (y == "") {
                        alert("Number of pups must be filled out");
                        return false;
                        }
                            
                        if (z == "") {
                        alert("Name must be filled out");
                        return false;
                        }
                        
                        if (a == "") {
                        alert("Email must be filled out");
                        return false;
                        }
                        
                        if (b == "") {
                        alert("Number must be filled out");
                        return false;
                        }
                        
                        if (c == "") {
                        alert("Image must be uploaded");
                        return false;
                        }     
                            
                        alert("Proceed To send via Mail");
                        return true;
                        }    
                                 
                         </script>        
            
    </body>
  
</html>