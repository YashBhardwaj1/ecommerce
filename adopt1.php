<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>

<html>
<head>
    <title>::Doggie Woggie::</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">
    
    </head>
    <body>
        
        <div id="wrapper">
        <div id="header">
            <div id="subheader">
        <div class="container">
                <p>Dog shopping site</p>
            <a href="login.html">Login</a><a href="login.html">Register</a><a href="#">CheckOut</a>
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
                <form class="Search" action="">
                    <input class="search-area" type ="text" name="text" placeholder="Search For Products">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                    <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                    
                    </form>
                </div>
                <!--User-menu-->
                <div id="user-menu">
                <a href="#">Cart : 0 Item(s) - Rs.0.00.00</a>   
                
                </div>
            </div>
            </div>
            <!--Navigation-->
            <div id="navigation">
            <nav>
                <a href="home.html">Home</a>
                <a href='adopt.html'>Adopt a pet</a>     
                <a href="sell.html">Sell a Pet</a>
                <a href="spa1.html">Pet Spa</a>
                <a href="shaadi.html">Dog Ki Shaadi</a>
                <a href="encylopedia.html">Breed Encylopedia</a>
                <a href="name.html">Name Your Dog</a>
                <a href="about.html">About</a>
                
                </nav>
            
            
            </div>
            <!---Home slider--->
            <div id="slider">
                
            </div>
            <div class="container">
            <div id="heading-block">
                <h3>ADOPT A PET</h3>   
                </div>
            </div>
            <div class="row">
            <div class="column left1">
                <div class="catbox">
                <img src="images/adopt1.jpg" height="200px" >
                    <span>AVAILABLE DISCOUNTS</span>
                </div>
                </div>
            <div class="column right1">
                <a href="#" class="cart-box" id="cart-info" title="View Cart">
               <?php 
                 if(isset($_SESSION["products"])){
	                  echo count($_SESSION["products"]); 
                          }else{
	                        echo 0; 
                              }
                                ?>
                                  </a>
                <div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Close</a>
<h3>Your Shopping Cart</h3>
    <div id="shopping-cart-results">
    </div>
</div>
                <h2 style="color:orange">Afghan Hound Puppies For Adoption</h2>
                <h4 style="color:green">Price Rs.250000</h4>
                <p>The Afghan Hound is considered an aristocratic sight hound. Tall and slender with a long, narrow, refined head, silky topknot and powerful jaws, the back part of the head and skull are quite prominent.</p>
                <?php
//List products from database
$results = $mysqli_conn->query("SELECT variation, color, sex, price,product_code FROM products_list");
if (!$results){
    printf("Error: %s\n", $mysqli_conn->error);
    exit;
}
//Display fetched records as you please
//$products_list =  '<ul class="products-wrp">';
while($row = $results->fetch_assoc()) {
$products_list .= <<<EOT
<li>
                
                
                <form action="" style="background-color: lightgoldenrodyellow" class="form-item">
                <h4>{$row["variation"]}</h4>
<div>Price : {$currency} {$row["price"]}<div>
                 Variation:<br>
                 <select style="width: 50%;height: 5%" name="variations">
                 <option value="basic">Basic</option>
                 <option value="ksi registered">Kci Registered</option>
                 <option value="quality">Show Quality Options</option>
                  </select>
                  <br>
                 Color:<br>
                <select style="width: 50%;height: 5%" name="color">
                 <option value="black">Black</option>
                 <option value="white">White</option>
                  </select>
                <br>
                Sex:<br>
                <select style="width: 50%;height: 5%" name="sex">
                 <option value="male">Male</option>
                 <option value="female">Female</option>
                  </select>
                    <div>Price : {$currency} {$row["product_price"]}</div>
                <br><br>
                    <button type="reset" name="clear" value="reset" style="height: 20px;width: 80px">RESET</button>
                 <input name="product_code" type="hidden" value="{$row["product_code"]}">
                 <button type="submit" class="add">Add To Cart</button>
                 </form>
                 
                </div>
                </li>
EOT;
}
$products_list .= '</ul></div>';
echo $products_list;
?>
                              
            </div>
        </div>
        </div>
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

                
                
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/my.js"></script>    
            
    </body>
  
</html>
