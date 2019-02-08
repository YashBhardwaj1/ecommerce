<html>
<head>
    <title>::Doggie Woggie::</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<link href="css/style4.css" rel="stylesheet" type="text/css">
    
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            <div id="subheader">
        <div class="container">
                <p>Dog shopping site</p>
            <a1 href="login.html">LOGIN</a1><a1 href="login.html">REGISTER</a1>
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
                   <a href ="sell3.php">
                <button class="btnspa">Return Back</button>
                       </a>
                
                </div>
            </div>
            </div>
            <!--Navigation-->
            <div id="navigation">
            <nav>
                <a1 href="home1.php">Home</a1>
                <a1 href='indexx1.php'>Adopt a pet</a1>     
                <a1 href="sell2.php">Sell a Pet</a1>
                <a1 href="spa3.php">Pet Spa</a1>
                <a1 href="dogki.php">Dog Ki Shaadi</a1>
                <a1 href="encylopedia1.php">Breed Encylopedia</a1>
                <a1 href="name1.php">Name Your Dog</a1>
                <a1 href="about1.php">About</a1>
                
            </nav>
            
            
            </div>
            
            <!---Home slider--->
            <div id="slider">
                
            </div>
            <div class="container">
            <div id="heading-block">
                <h3>Click On the below link to send your pet's details..</h3> 
                <h4>Also attach appropriate image..</h4>
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






<?php

$con = mysqli_connect('localhost','root','');

if(!$con)
{
    echo 'Not connected';
}
if (!mysqli_select_db($con,'demo'))
{
    echo 'Database Not Selected';
}
    
$name = $_POST['breed'];
$kci = $_POST['KCI'];
$color = $_POST['color'];
$sex = $_POST['gender'];
$age = $_POST['age'];
$num = $_POST['num'];
$pic = $_POST['pic'];
$namee = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$to = 'Mail regarding Sell Your Pet';

/*echo "<a1 href='mailto:yashbj98@gmail.com?body=Name,KCI,Color,sex,age,num,name,email,number:" . $name . "" . $kci . "" . $color . "" . $sex . " " . $age . "" . $num . "" . $namee . "" . $email . "" . $number . "'>Send Mail</a1>";*/

echo <<<END
<style type="text/css">
a:link { color: blue; text-decoration: none; }
a:visited { color: blue; text-decoration: none; }
a:hover { color: red; text-decoration: underline; }
a:active { color: red; text-decoration: underline; }
a {font-size: 20px;}
a {text-align: center;}
a {position: relative;
    left:-250px;
    bottom:-170px;}
</style>
END;

$sql = "insert into sell (Breed,KCI,color,sex,Age,Number,Image,Yname,Yemail,Ynumber) values ('$name','$kci','$color','$sex','$age','$num','$pic','$namee','$email','$number')";

echo '<a href="mailto:yashbj98@gmail.com?cc=2016.shivani.jadhav@ves.ac.in&bcc=2016.saloni.kadam@ves.ac.in
&amp;subject='.$to.'
&amp;body=Name of Breed{'.$name.'}       Quality{'.$kci.'}    Color{'.$color.'}       Sex{'.$sex.'}        Age in Months{'.$age.'}       Number of dogs{'.$num.'}                 Email{'.$email.'}                Number{'.$number.'}            Also attach the image of your pet with the mail!..">
Send mail to complete the selling procedure</a>';



?>