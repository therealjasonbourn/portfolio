<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address (you can change this)
    $to = "therealjasonbourn@gmail.com";
    $subject = "New Message from Contact Form";

    // Construct the email content
    $email_message = "You have received a new message from the contact form.\n\n";
    $email_message .= "Name: " . $name . "\n";
    $email_message .= "Email: " . $email . "\n\n";
    $email_message .= "Message:\n" . $message . "\n";

    // Set the headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email using sendmail
    $sendmail_command = "/usr/sbin/sendmail -t";  // Assuming Sendmail is located here
    $sendmail_process = popen($sendmail_command, "w");
    fwrite($sendmail_process, "To: " . $to . "\r\n");
    fwrite($sendmail_process, "Subject: " . $subject . "\r\n");
    fwrite($sendmail_process, $headers);
    fwrite($sendmail_process, "\r\n" . $email_message);
    fclose($sendmail_process);

    echo "Thank you for your message. We will get back to you soon!";
} else {
    echo "Please fill in the form.";
}
?>
