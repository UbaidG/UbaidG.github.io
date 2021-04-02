<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = "ubaidghante1@gmail.com";
    $email_subject = 'New portfolio request';

    $email_body = "User Name : $name.\n".
                    "User Email : $visitor_email.\n".
                        "User Message : $message.\n";

    $to = "ughante@gmail.com";
    
    $headers = "Form: $email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>