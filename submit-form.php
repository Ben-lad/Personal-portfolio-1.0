<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "benlad636@gmail.com";
    $subject = "Form Submission";
    $headers = "From: " . $email;
    mail($to, $subject, $message, $headers);
    echo "Form submitted successfully!";
?>
