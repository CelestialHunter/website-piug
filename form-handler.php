<?php
    $name = $_POST["name"] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['post'] ?? null;
    $message = $_POST['message'] ?? null;

    $email_from = 'noreply@smart-solutions.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User Phone: $phone.\n".
                    "User Message: $message.\n";

    $to = 'adresatest@andreibaleafirmelelui';

    $headers = "MAIL FROM: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";
    header("Location: contact.html");

    mail($to,$email_subject,$email_body,$headers);

?>