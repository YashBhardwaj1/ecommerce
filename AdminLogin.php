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
                <form class="Search" action="encylopedia.html" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For Page">
                    <input class="search-btn" type="submit" name="submit" value="SEARCH">
                    <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                    
                    </form>
                </div>
                <!--User-menu-->
                <div id="user-menu">
                
                
                </div>
            </div>
            </div>
            <!--Navigation-->
            <div id="navigation">
            <nav>
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
                <h3>My Account</h3>   
                </div>
            </div>
            <div class="row">
            <div class="column left3">
                <form method="POST" action="loginadmin.php" name="myForm" onsubmit="return validateForm()">
  <div class="container1">
    <h1 style="color: orange";>Login</h1>
    <p>Please fill in this form to login.</p>
    <hr>

    <label for="email"><b>Email or Username</b></label>
    <input style="width: 100%;height:10%;text-align: center" type="text" placeholder="Enter Email" name="email" >

      <br><br><label for="psw"><b>Password</b></label>
    <input style="width: 100%;height:10%;text-align: center" type="password" placeholder="Enter Password" name="psw" >

    
    <hr>

    <button type="submit" class="registerbtn" name="login">Login</button>
  </div>
                <script>
            function validateForm() {
                var x = document.forms["myForm"]["email"].value;
                var y = document.forms["myForm"]["psw"].value;
                
                if (x == "") {
                        alert("Email must be filled out");
                        return false;
                        }
                         
                if (y == "") {
                        alert("Password  must be filled out");
                        return false;
                        }
                alert("Congratulations!!! You Have Successfully Logged In..");
                        return true;
                        }    
                                 
                </script>      
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
        

                
            
    </body>
  
</html>