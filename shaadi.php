<? php

require_once('config.php');

    if(isset($_POST['ADD MY PET'])){

        if($_SESSION['User']){

        	echo "<script>
            alert('Correct');
            header("location:login.html?Invalid= Please Enter Correct User Name and Password" );
            </script>";
            
        }
        else
        {
        	echo "<script>
            alert('Incorrect');
            header("location:shaadi.html?");
            </script>";
             
            
        }
}

?>

