<?php
    if(isset($_POST['button'])) {
        $to = "rajukairatechnologies@gmail.com"; // Receiver Email ID, Replace with your email.
        $subject = 'New Query';
        $message = 'Full Name: ' . $_POST['fullName'] . "\r\n";
        $message .= 'Mobile Number: ' . $_POST['mobile'] . "\r\n";
        $message .= 'Digital Marketing: ' . $_POST['DigitalMarketing'] . "\r\n";
        $headers = 'From: ' . $_POST['email'] . "\r\n" .
            'Reply-To: ' . $_POST['email'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers)) {
            echo 'Email Sent. We will get back to you soon.';
        } else {
            echo 'Unable to send email. Please try again.';
        }
    }
?>
