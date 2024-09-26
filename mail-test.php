<?php
require('wp-load.php');

$to = 'sk963070@gmail.com';
$subject = 'Test Email from WordPress';
$body = 'This is a test email.';
$headers = array('Content-Type: text/html; charset=UTF-8');

if (wp_mail($to, $subject, $body, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>
