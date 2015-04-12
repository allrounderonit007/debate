<?php 
   $current_email=$_GET['a'];
   $rr= "<a href='http://localhost/debate/register/activate.php?a=".$current_email."' > Click Here </a>"; 
    $recipient=$current_email;
    $subject = "Account Activation"+ $recipient;
    echo $subject; 
    $comment = "Hi " .$rr ;
    echo $comment;
    $headers = 'From: team6sen@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
    mail($recipient, $subject, $comment, $headers);
                
                
?>
    