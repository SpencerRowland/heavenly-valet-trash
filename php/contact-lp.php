<?php

// used modified version of the following tutorials
// https://bootstrapbay.com/blog/working-bootstrap-contact-form/


    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $companyname = $_POST['company-name'];
        $preferreddate = $_POST['preferred-date'];
        $participantcount = $_POST['participant-count'];
        $message = $_POST['message'];
        $to = 'escapeexperiencenashville@gmail.com'; 
        $subject = 'Team Building Inquiry';
        
        $body = "From: $name\nE-Mail: $email\nCompany Name: $companyname\nPreferred Date: $preferreddate\nParticipant Count: $participantcount\n\nMessage:\n\n$message";
 
        // send the email
        $headers = "From: " . $name . " <" . $email . ">" . "\r\n" . "Reply-To: " . $email;
        $success = mail($to, $subject, $body, $headers);
        
        // redirect to success page
        header("Location: ../team-building-landing-page");
    }
?>