<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $mobileNo = $_POST["mobileNo"];
    $digitalMarketing = $_POST["DigitalMarketing"];

    // Add your validation logic here if needed

    // Email configuration
    $to = "rajukairatechnologies@gmail.com";
    $subject = "New Form Submission";
    $message = "Full Name: $fullName\nMobile No: $mobileNo\nDigital Marketing: $digitalMarketing";

    // Send email
    $headers = "From: webmaster@example.com"; // Set your website's email address here
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
