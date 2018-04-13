<?php
    $visitor_email=?_Post['email'];
    
    $email_from='lanelarochelle@lanelarochelle.com';
    $email_subject="Request From lanelarochelle.com";
    $email_body="User Email: $visitor_email.\n"; 
    $email_to="lanegotcha7@gmail.com";

    $headers= "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email\r\n";
    mail($email_to,$email_subject,$email_body, $headers);
    header("Location: about.html");
?>
