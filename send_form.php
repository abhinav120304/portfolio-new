<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'abhinav120304@gmail.com'; // Corrected email address
    $subject = 'New message from your website';
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $message_body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
}
?>
