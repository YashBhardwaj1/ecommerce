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
                <form class="Search" action="about.html" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For page">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                    <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                    
                    </form>
                </div>
                <!--User-menu-->
                 <div id="user-menu">
              <!--<a href="#" class="cart-box" id="cart-info" title="View Cart">-->
0                   

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
                <a href="home2.php">Home</a>
                <a href='dogki3.php'>Adopt a pet</a>     
                <a href="sell3.php">Sell a Pet</a>
                <a href="spa4.php">Pet Spa</a>
                <a href="indexx2.php">Dog Ki Shaadi</a>
                <a href="encylopedia2.php">Breed Encylopedia</a>
                <a href="name2.php">Name Your Dog</a>
                <a href="about2.php">About</a>
                
            </nav>
            
            
            </div>
            <!---Home slider--->
            <div id="slider">
                
            </div>
            <div class="container">
            <div id="heading-block">
                <h3>DOG SEARCH NAME</h3> 
                <h4>Male Names</h4>
                </div>
            
            <div id="heading-block2">
                <h4>Dog name search by sex</h4>
                </div>    
            </div>
            
            <div class="row">
            <div class="column left4">
                
                <span id = "male">
                <!--<input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
               <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">-->
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Abbot" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Abel" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Adler" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Aero" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center" type="text" value="Boss" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Brandon" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Brently" name="MN">
               <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Coco" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Colbert" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Collin" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Dagger" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Dain" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Dash" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Dennis" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Elf" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Faulkner" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Gray" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Gonzo" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Hank" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Herbie" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Ice" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Irwin" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Jack" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Jacob" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Keats" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Khan" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Killer" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="King" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Leo" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Lenny" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Magic" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Max" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Oreo" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Spike" name="MN">
                <input style="width: 17%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Thor" name="MN">
    
                </span>
                
                <div class="column left4_2">
                 <div class="container">
            <div id="heading-block4"> 
                <h4>Female Names</h4>
                </div>
                     <span id="female">
                   <!-- <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yash" name="MN"> -->
                         
                         <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Abby" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Blue" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Dolly" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Caramel" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Fancy" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Kairi" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Missy" name="MN">
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Queen" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Polly" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Rhea" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Sassy" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Tara" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Ursula" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Venus" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Winter" name="MN"> 
                    <input style="width: 28%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px" type="text" value="Yumi" name="MN"> 

                         </span>
                </div>
                     
                
                    
                </div>
                </div>
            <div class="column right4">
                
                <a href="#male">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="Male Name" name="MN">
                </a>
                
                <a href="#female">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="Female Name" name="MN">
                </a>
                
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