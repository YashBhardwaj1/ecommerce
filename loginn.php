<html>
<head>
    <title>::Doggie Woggie::</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
    
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            <div id="subheader">
        <div class="container">
                <p>Dog shopping site</p>
            <a href="#">Login</a><a href="#">Register</a><a href="#">CheckOut</a>
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
                <h3>My Account</h3>   
                </div>
            </div>
            <div class="row">
            <div class="column left3">
                <form method="POST" action="login.php">
  <div class="container1">
    <h1 style="color: orange";>Login</h1>
    <p>Please fill in this form to login.</p>
    <hr>

    <label for="email"><b>Email or Username</b></label>
    <input style="width: 100%;height:10%;text-align: center" type="text" placeholder="Enter Email" name="email" required>

      <br><br><label for="psw"><b>Password</b></label>
    <input style="width: 100%;height:10%;text-align: center" type="password" placeholder="Enter Password" name="psw" required>

    
    <hr>

    <button type="submit" class="registerbtn" name="login">Login</button>
  </div>
</form>
            </div>
            <div class="column right3">
                <form action="login.php">
    <div class="container1">
    <h1 style="color: orange";>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label><br>
    <input style="width: 100%;height:10%;text-align: center" type="text" placeholder="Enter Email" name="email" required>

      <br><br><label for="psw"><b>Password</b></label><br>
    <input style="width: 100%;height:10%;text-align: center" type="password" placeholder="Enter Password" name="psw" required>

    
    <hr>

    <button type="submit" class="registerbtn" name="register">Register</button>
  </div>
  
  <div class="container1 signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
                
                <!--<h2 style="color:orange">Afghan Hound Puppies For Adoption</h2>
                <h4 style="color:green">Price Rs.2500000</h4>
                <p>The Afghan Hound is considered an aristocratic sight hound. Tall and slender with a long, narrow, refined head, silky topknot and powerful jaws, the back part of the head and skull are quite prominent.</p>
                <form action="" style="background-color: lightgrey">
                 Variation:<br>
                 <select name="variations">
                 <option value="basic">Basic</option>
                 <option value="ksi registered">Ksi Registered</option>
                 <option value="quality">Show Quality Options</option>
                  </select>
                  <br>
                 Color:<br>
                <select name="color">
                 <option value="black">Black</option>
                 <option value="white">White</option>
                  </select>
                <br>
                Sex:<br>
                <select name="sex">
                 <option value="male">Male</option>
                 <option value="female">Female</option>
                  </select>    
                <br><br>
                <input type="button" name="clear" value="CLEAR">
                 </form> 
                <button type="button" class="add">Add To Cart</button>-->
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