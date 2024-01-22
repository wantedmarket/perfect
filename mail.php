<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST['fullName'];
    $mobile = $_POST['mobile'];
    $digitalMarketing = $_POST['DigitalMarketing'];

    // Set up the recipient email address
    $to = "rajukairatechnologies@gmail.com";  // Replace with your email address

    // Set up the email subject
    $subject = "New Form Submission";

    // Compose the email message
    $message = "Full Name: $fullName\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Digital Marketing Interest: $digitalMarketing\n";

    // Set up headers
    $headers = "From: $fullName <$to>\r\n";
    $headers .= "Reply-To: $to\r\n";

    // Send the email
    $mailSuccess = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        // Redirect to thank you page
        header("Location: thankyou.html");  // Replace with your thank you page URL
        exit();
    } else {
        // Redirect to an error page
        header("Location: error.html");  // Replace with your error page URL
        exit();
    }
} else {
    // Handle invalid request method
    echo "Invalid request method.";
}
?>
