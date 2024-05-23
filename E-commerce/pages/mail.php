<?php
$to = "recipient@example.com";
$subject = "Test Email";
$message = "This is a test email.";

$headers = "From: rawen.sahraoui@ensi-um.tn" . "\r\n" .
           "Reply-To: sahraouirawen3@gmail.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
