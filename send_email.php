<!-- filepath: /c:/Portfolio/send_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "fstalsberg@gmail.com";
    $body = "Name: $name\nEmail: $email\n\nSubject: $subject\nMessage:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Email successfully sent!'); window.location.href = 'contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send email. Please try again later.'); window.location.href = 'contact.html';</script>";
    }
}
?>
