<?php
    $name = $_POST[''];
    $email = $_POST[''];
    $phone = $_POST[''];
    $message = $_POST[''];

    $email_from = 'noreply@smart-solutions.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User Phone: $phone.\n".
                    "User Message: $message.\n";

    $to = 
?>