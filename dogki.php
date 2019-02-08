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
            <a href="#">MYACCOUNT</a><a href="login.html">LOGOUT</a>
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
                
                    <form class="Search" action="encylopedia.php" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For page">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                    <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                    
                    
                    </form>
                </div>
                
                <!--User-menu-->
                <div id="user-menu">
                <!--<a href="#">Cart : 0 Item(s) - Rs.0.00.00</a>-->
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
            <div class="row">
               
                  
            <div class="container">
            <div id="heading-block">
                
                <h3>Dog Ki Shaadi</h3> 
                
                <input id="myBtn1" type="button" value="Add My Pet profile" name="ADD MY PET" class="Profile" >  
                </div>
                                <!-- The Modal -->
            <div id="myModal1" class="modal1">

            <!-- Modal content -->
            <div class="modal-content1">
            <span class="close1">&times;</span>
               <!--<div class="row">-->
                    <div id="heading-block5"> 
                   <h2 style="color: orange">My Pet Profile</h2>
                </div> 
           <div class="column left7">  
                </div>
                
            <div class="column right7">
                <form name="myForm" onsubmit="return validateForm()" action="addmypet.php" method="post">
                 
                <label style="margin-left: 20px;margin-top: -50px">Name:</label>
                <input style="width: 30%;height:10%; text-align: center;margin-left: 38px;margin-top: 20px" type="text" name="name" required><br> 
                    
                <label style="margin-left: 20px;">Category:</label>
                <input style="width: 30%;height:10%; text-align: center;margin-left: 18px;margin-top: 5px" type="text" name="cat" required><br><br>
                    
                <input style="margin-left: 20px;margin-top: 5px" type="radio" name = "KCI" value="KCI" checked>KCI REGISTERED
                 <input style="margin-top: -100px" type="radio" name = "KCI" value="NON KCI" > NON KCI REGISTERED<br>    
                 
                <br><label style="margin-left: 20px;">Color:</label>
                <select style="width: 20%;height: 5%" name="color">
                 <option value="black">Black</option>
                 <option value="white">White</option>
                  </select >
        
                <label style="margin-left: 25px">Sex:</label>
                 <input style="margin: 5px;" type="radio" name = "gender" value="male" checked>Male
                 <input style="margin: 5px;" type="radio" name = "gender" value="female" > Female<br><br>
                    
                <label style="margin-left: 20px;">Age in Years:</label>
                <input style="width: 10%;height:5%; text-align: center" type="text" name="age" required >
                    
                <label style="margin-left: 20px;">Email:</label>
                <input style="width: 30%;height:5%; text-align: center" type="text" name="email" required ><br>     
                    
                <label style="margin-left: 20px;">Upload Image:</label>
                <input type = "file" name="pic" accept="image/*" required> 
                        
                
                    <button onclick="validateForm()" class="send2">Send</button>
                        
                 </form> 
                
                </div>
            </div>
            
    
            </div>
               </div>
            </div>
          <!--<a href="#" class="cart-box" id="cart-info" title="View Cart">
<?php 
if(isset($_SESSION["products"])){
	echo count($_SESSION["products"]); 
}else{
	echo 0; 
}
?>
</a>-->



<?php
//List products from database
$results = $mysqli_conn->query("SELECT ID,name, category, sex, color, age,image FROM shaadi");
if (!$results){
    printf("Error: %s\n", $mysqli_conn->error);
    exit;
}

//Display fetched records as you please
$products_list =  '<ul class="products-wrp">';

while($row = $results->fetch_assoc()) {
$products_list .= <<<EOT
<li>
<form class="form-item">
<h4>{$row["name"]}</h4>
<div><img src="images/{$row["image"]}"></div>
<div class="item-box">
    <div>
	Color :{$row["color"]}
    
	</div>
	
	<div>
    SEX :{$row["sex"]}
    
	</div>
	
	<div>
    Category :
    {$row["category"]}
	</div>
    
    <div>
    ID :
    {$row["ID"]}
	</div>
    <div>
   
	
    <input id="myBtn" class="shaadi" type="button" value="Interested">
                            <!-- The Modal -->
                        <div id="myModal" class="modal">
                        
                        <!-- Modal content -->
                        <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="row">
                        <div class="column left6">
                            <div class="prod-box">
                   <img src="images/{$row["image"]}" alt="dog1">
                    <div class="prod-trans1">
                        <div class="prod-feature1">
                        <form action="">    
                        <input style="background: none;text-align: center;border: none;font-weight:bolder;color: orange"type = "text" value = "{$row["name"]}"><br>    
                        
                        <label style="color: orange;font-weight: bold;margin-left: 1.5px">Category:</label>
                        <input style="background: none;border: none;color: whitesmoke;" type = "text" value="{$row["category"]}"><br>
                        
                        <label style="margin-left: -2.315px;color: orange;font-weight: bolder">Sex:</label>
                        <input style="width: 15%;height:5%; text-align: center;background: none;border: none;color: whitesmoke" type="text" value="{$row["sex"]}" required>  
                
                        <label style="margin-left: 10px;color: orange;font-weight: bold">Color:</label>
                        <input style="width: 18%;height:5%; text-align: center;background: none;border: none;color:whitesmoke" type="text" value="{$row["color"]}" required><br>    
                        
                        <label style="color: orange;font-weight: bolder;">Age:</label>
                        <input style="background: none;border: none;color: whitesmoke" type = "text" value="{$row["age"]}"><br>            
                        </form>    
                        </div>
                    </div>

                    
                   </div>
                       
                        </div>
                        <div class="column right6">
                            
                         <div id="heading-block5"> 
                          <h4>Yes,I'm interested</h4>
                         </div>    
                        <form name="myForm" onsubmit="return validateForm()" action="sendshaadi.php" method = "post">
                        <label style="margin-left: -20px;"><b>Enter Name:</b></label>
                <input style="width: 30%;height:10%; text-align: center;margin-left: 20px" type="text" placeholder="Enter Name" name="name" required>
                        
                       <br><br><label style="margin-left: -20px;"><b>Email:</b></label>
                <input style="width: 30%;height:10%; text-align: center;margin-left: 70px" type="email" placeholder="Enter Email" name="email" required>
                            
                        <br><br><label style="margin-left: -20px;"><b>Mobile:</b></label>
                <input style="width: 30%;height:10%; text-align: center;margin-left: 55px" type="number" placeholder="Enter Mobile" name="mobile" required> 
                
                        <br><br><label style="margin-left: -20px;"><b>ID:</b></label>
                <input style="width: 50%;height:10%; text-align: center;margin-left: 55px" type="number" placeholder="Enter ID of Interested profile" name="ID" required> 
                            
                            <br><br>
                            <button onclick="validateForm()" class="send3" type ="submit">Send</button>
                            </form>
                            </div>
                        </div>    
                          </div>
                            
</div>
</li>
EOT;

}
$products_list .= '</ul></div>';

echo $products_list;
?>
                </div>
            
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/my.js"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
        </script>

<!--Add pet profile-->
<script>
// Get the modal
 var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>        
        
        <script >
                        function validateForm() {
                        var z = document.forms["myForm"]["name"].value;
                        var a = document.forms["myForm"]["email"].value;    
                        var b = document.forms["myForm"]["mobile"].value;
                        var c = document.forms["myform"]["gender"].value;
                        var d = document.forms["myform"]["KCI"].value;
                        var e = document.forms["myform"]["cat"].value; 
                            
                            
                        
                            
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
                         
                        if (e == "") {
                        alert("Number must be filled out");
                        return false;
                        }    
                            
                        alert("Congratulations!!! Your Message is sent");
                        return true;
                        }    
                                 
                         </script>  
        
        
    </body>
  
</html>