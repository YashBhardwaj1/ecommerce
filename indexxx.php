<? php
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure='tls';

    $mail->Username = 'yashbj98@gmail.com';
    $mail->Password = 'yashb123';

    $mail->setFrom('yashbj98@gmail.com','YashBhardwaj');
    $mail->addAddress('yashbj98@gmail.com');
    $mail->addReplyTo('yashbj98@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'PHP Mailer Subject';
    $mail->Body = '<h1 align=center>Subscribe My Channel</h1><br><h4 align=center>Like This Video</h4>';
    if(!$mail->send()){
        echo "Message could not be sent!";
    }
   else{
        echo "Message has been sent!";
    }
    ?>