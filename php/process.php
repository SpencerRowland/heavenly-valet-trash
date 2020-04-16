<?php

// used modified version of the following tutorials
// https://bootstrapbay.com/blog/working-bootstrap-contact-form/


    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = 'getescapekit@gmail.com'; 
        $subject = 'Message from Contact Form';
        
        $body = "From: $name\nE-Mail: $email\n\nMessage:\n\n$message";
 
        // send the email
        $headers = "From: " . $name . " <" . $email . ">" . "\r\n" . "Reply-To: " . $email;
        $success = mail($to, $subject, $body, $headers);
        
        // redirect to success page
        header("Location: ../contact-lp.html");
    }
?>