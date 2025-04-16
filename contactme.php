<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure the path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hshdeveloperkosova@gmail.com';    // SMTP username
        $mail->Password = 'gepgtkkmkysfxwzl';                // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                   // TCP port to connect to

        // Recipients
        $mail->setFrom('hshdeveloperkosova@gmail.com', 'Mailer');
        $mail->addAddress('hshdeveloperkosova@gmail.com', 'Recipient Name'); // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Dikush Kontaktoj ne Websitin tuaj!';
        $mail->Body    = "Emri: $name<br>Nr. Telefonit: $phone<br>Email: $email<br>Mesazhi:<br>$message";

        $mail->send();
        
         header("Location: success.html");
        exit(); 
    } catch (Exception $e) {
        header("Location: failed.html");
        exit(); 
    }
}
?>
