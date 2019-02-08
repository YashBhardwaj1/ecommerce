<?php
                   if(isset($_POST['send'])){
                       if(mail($_POST['mail'],$_POST['name'],$_POST['comment'])){
                           echo "Mail Send";
                       }else{
                           echo "Failed";
                       }
                   }
       
    ?>
