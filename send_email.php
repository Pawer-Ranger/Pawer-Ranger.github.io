<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent injection attacks
    $firstName = htmlspecialchars(strip_tags($_POST['first-name']));
    $lastName = htmlspecialchars(strip_tags($_POST['last-name']));
    $phoneNumber = htmlspecialchars(strip_tags($_POST['phone-number']));
    $freeText = htmlspecialchars(strip_tags($_POST['free-text']));

    // Define the email recipient and subject
    $to = "Rotem.pawerranger@gmail.com";  // Replace with your email address
    $subject = "פנייה ממתעניין פוטנציאלי חדש דרך האתר";

    // Construct the email body
    $message = "
    <html>
    <head>
    <title>Contact Form Submission</title>
    </head>
    <body>
    <h2>Contact Form Submission</h2>
    <p><strong>First Name:</strong> $firstName</p>
    <p><strong>Last Name:</strong> $lastName</p>
    <p><strong>Phone Number:</strong> $phoneNumber</p>
    <p><strong>Free Text:</strong> $freeText</p>
    </body>
    </html>
    ";

    // Set the email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <no-reply@pawerranger.com>' . "\r\n";  // Replace with your email address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "ההודעה נשלחה בהצלחה!";
    } else {
        echo ".שליחת ההודעה נכשלה";
    }
} else {
    echo "Invalid request method.";
}
?>
