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
                    <a href ="spa5.php">
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
                <h3>Click On the below link to send your appointment details..</h3> 
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

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$number = $_POST['number'];
$to = 'SPA APPOINTMENT';

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
    bottom:-100px;}
</style>
END;

/*echo "<a href='mailto:yashbj98@gmail.com?body=Name,EMail,Date,Number:" . $name . "" . $email . "" . $date . "" . $number . " '>Send Mail</a>";*/

echo '<a href="mailto:yashbj98@gmail.com?cc=2016.shivani.jadhav@ves.ac.in&bcc=2016.saloni.kadam@ves.ac.in
&amp;subject='.$to.'
&amp;body=Name{'.$name.'}      Email{'.$email.'}      Date{'.$date.'}      Number{'.$number.'}">
Send mail to complete your appointment bookings</a>'




/*$sql = "insert into spa (name,email,date,number) values ('$name','$email','$date','$number')";*/

/*if(!mysqli_query($con,$sql)){
    echo 'Not inserted';
}
else
{
   header("url=spa2.html");
}*/


/*if(isset($_POST['send'])){
$mailto = $_POST['email'];
    $mailSub = $_POST['number'];
    $mailMsg = $_POST['name'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "2016.vishnu.bhardwaj@ves.ac.in@gmail.com";
   $mail ->Password = "yashbj123";
   $mail ->SetFrom("2016.vishnu.bhardwaj@ves.ac.in@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
   
}*/
?>