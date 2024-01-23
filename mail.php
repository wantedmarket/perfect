<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $digitalMarketing = $_POST['DigitalMarketing'];

    // Gmail recipient address
    $to = "rajukairatechnologies@gmail.com";

    $subject = "New Inquiry from Website";

    $message = "Name: " . $name . "\r\n";
    $message .= "Mobile: " . $mobile . "\r\n";
    $message .= "Digital Marketing: " . $digitalMarketing . "\r\n";

    $headers = "From: vasanth.kairatechnologies@gmail.com"; // Use your own email address here

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "<script>
                document.getElementById('success-message').style.display = 'block';
            </script>";
    } else {
        // Some error occurred while sending the email
        echo "<script>
                alert('Unable to send email. Please try again.');
            </script>";
    }
}
?>
