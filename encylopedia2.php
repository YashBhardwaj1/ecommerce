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
                <form class="Search" action="name.html" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For Page">
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
                <h3>Breed Encylopedia</h3> 
                 <h3 style="align-content: center;color: darkred;margin-left: 20%">SUPRISED?? Just Hover Over!!!</h3>
                </div>
            
            <div id="heading-block3">
                <h4>Breed name search </h4>
                </div>    
            </div>
            
            <div class="row">
            <div class="column left5">
                <div class="prod-container">
                <!--First product-->
                <span id = "A">    
                <div class="pr-box">
                    <img src="images/prodd1.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Akita puppies</b></p>
                    <p style="color:white;font-weight:bold">The Affenpinscher, also known as the "Monkey Dog" is small but feisty, full of spunk and energy.</p>    
                        
                        </div>
                    </div>
                    </div>
                    </span>
                <!--Second product-->
                <span id = "B">    
                <div class="pr-box">
                    <img src="images/prodd2.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Bfghan Hound</b></p>
                    <p style="color:white;font-weight:bold">The Afghan Hound was originally used for hunting large prey in both the deserts and in the mountains of Afghanistan, where his abundant, flowing coat was needed for warmth.</p>    
                        
                        </div>
                    </div>
                    </div>
                    </span>
                <!--Third product-->
                <span id = "C">   
                <div class="pr-box">
                    <img src="images/prodd3.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Cogue de Bordeaux</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div> 
                    </span>
                <!--Fourth product-->
                   <span id = "D"> 
                    <div class="pr-box">
                    <img src="images/home1.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Dogue de Bordeaux</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span>
                <!--Fifth product-->
                   <span id = "E"> 
                    <div class="pr-box">
                    <img src="images/home2.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Elephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                <!--Sixth product-->
                   <span id = "F"> 
                    <div class="pr-box">
                    <img src="images/home3.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Flephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                    <!--Seventh product-->
                   <span id = "G"> 
                    <div class="pr-box">
                    <img src="images/home5.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Glephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                    <!--Seventh product-->
                   <span id = "H"> 
                    <div class="pr-box">
                    <img src="images/home6.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Hlephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                    <!--Seventh product-->
                   <span id = "I"> 
                    <div class="pr-box">
                    <img src="images/prodd3.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Ilephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                    <!--Seventh product-->
                   <span id = "J"> 
                    <div class="pr-box">
                    <img src="images/prodd2.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Jlephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                    <!--Seventh product-->
                   <span id = "K"> 
                    <div class="pr-box">
                    <img src="images/home1.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Klephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                    <!--Seventh product-->
                   <span id = "L"> 
                    <div class="pr-box">
                    <img src="images/home2.jpg" alt="dog1">
                    <div class ="pr-trans">
                    <div class="column left5_1">
                        <p><b>Llephant a puppy</b></p>
                    <p style="color:white;font-weight:bold">"This dog breed‘s most famous member co-starred with Tom Hanks in the 1989 movie, Turner and Hooch. Loyal, self-assured, and territorial, the Dogue de Bordeaux requires lots of training and socialization. "</p>    
                        
                        </div>
                    </div>
                    </div>     
               </span> 
                
                </div>
                
                
                </div>
            <div class="column right5">
                
                <a href="#A">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="A" name="MN">
                </a>
                
                <a href="#B">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="B" name="MN">
                </a>    
                
                <a href="#C">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="C" name="MN">
                </a>    
                
                <a href="#D">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="D" name="MN">
                </a>    
                
                <a href="#E">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="E" name="MN">
                </a> 
                
                <a href="#F">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="F" name="MN">
                </a>
                
                <a href="#G">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="G" name="MN">
                </a>
                
                <a href="#H">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="H" name="MN">
                </a> 
                
                <a href="#I">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="I" name="MN">
                </a> 
                
                <a href="#J">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="J" name="MN">
                </a> 
                
                <a href="#K">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="K" name="MN">
                </a> 
                
                <a href="#L">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="L" name="MN">
                </a> 
                
                <a href="#M">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="M" name="MN">
                </a>
                
                <a href="#N">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="N" name="MN">
                </a>
                
                <a href="#O">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="O" name="MN">
                </a>
                
                <a href="#P">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="P" name="MN">
                </a>
                
                <a href="#Q">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="Q" name="MN">
                </a>
                
                <a href="#R">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="R" name="MN">
                </a>
                
                <a href="#S">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="S" name="MN">
                </a>
                
                <a href="#T">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="T" name="MN">
                </a>
                
                <a href="#U">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="U" name="MN">
                </a>
                
                <a href="#V">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="V" name="MN">
                </a>
                
                <a href="#W">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="W" name="MN">
                </a>
                
                <a href="#X">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="X" name="MN">
                </a>
                
                <a href="#Y">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="Y" name="MN">
                </a>
                
                <a href="#Z">
                <input style="width: 60%;height: 40px;border-style: solid;border-color: black;margin-left: 5px;text-align: center;margin-top: 10px;background-color: white" type="button" value="Z" name="MN">
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