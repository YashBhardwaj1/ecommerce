<html>
<head>
    <title>::Doggie Woggie::</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel ="stylesheet">
    <link href = "fa/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
    
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            <div id="subheader">
        <div class="container">
                <p>Dog shopping site</p>
            <a href="login.html">Login</a><a href="login.html">Register</a>
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
                
                    <form class="Search" action="dogki.php" target="_blank" method="get">
                    <input class="search-area" type ="text" name="text" placeholder="Search For page">
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
            <a href="#" class="menu-togglr"><i class="fa fa-bars"></i></a>
            <nav id = "mainav">
                <a href="home2.php">Home</a>
                <a href='dogki3.php'>Adopt a pet</a>     
                <a href="sell3.php">Sell a Pet</a>
                <a href="spa1.php">Pet Spa</a>
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
                <h3>Pet SPA Online</h3>   
                </div>
            </div>   
            
            

            <div class="row">
            <div class="column left">
                <div class="catbox">
                <img src="images/prod1.jpg">
                    <span>AVAILABLE DISCOUNTS</span>
                </div>
                </div>
                
                <div class="column right">
                    <h2 style="color:orange">Book Appointment</h2>
            <form role="form" name="myForm" onsubmit="return validateForm()" action="spa.php" method="post">
                <label style="margin-left: 20px;"><b>Enter Name:</b></label>
                <input style="width: 30%;height:5%; text-align: center" type="text" placeholder="Enter Name" name="name" required>
                
                <label style="margin-left: 20px;"><b>Enter Email:</b></label>
                <input style="width: 30%;height:5%; text-align: center" type="text" placeholder="Enter Email" name="email" required>
                
                <br><br><label style="margin-left: 20px;"><b>Enter Date:</b></label>
                <input style="width: 30%;height:5%; text-align: center;" type="date" placeholder="Enter Date" name="date" required>
                
                <label style="margin-left: 25px;"><b>Enter Number:</b></label>
                <input style="width: 30%;height:5%; text-align: center" type="number" placeholder="Enter Number" name="number" required>
       
                <div class = "clearfix">
        <button type="submit" onclick="validateForm()" class="sendbtn" name="send">Send</button>        
        <button type="reset" type="reset" class="cancelbtn">Clear</button>
                    </div>
                

    
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
        <!--Form validation-->
        <script >
                        function validateForm() {
                        var x = document.forms["myForm"]["name"].value;
                        var y = document.forms["myForm"]["email"].value;
                        var z = document.forms["myForm"]["date"].value;    
                        var b = document.forms["myForm"]["number"].value;   
                            
                        if (x == "") {
                        alert("Name must be filled out");
                        return false;
                        }
                         
                        if (y == "") {
                        alert("Email  must be filled out");
                        return false;
                        }
                            
                        if (z == "") {
                        alert("Date must be filled out");
                        return false;
                        }
                        
                        
                        if (b == "") {
                        alert("Number must be filled out");
                        return false;
                        }
                                
                        alert("Please proceed to send the mail!!");
                        return true;
                        }    
                                 
                         </script> 
            
    </body>
  
</html>