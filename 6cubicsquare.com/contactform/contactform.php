<?php
$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$to = "faizalkhan.s@gmail.com, r.sivabrahman12@gmail.com, info@6cubicsquare.com";

$subject = "6 Cubic Squares Enquiry Form";

$from = 'faizalkhan.s@gmail.com';

//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from;

//$headers .= 'From: '.$from."\r\n".
  //  'Reply-To: '.$from."\r\n" .
  //  'X-Mailer: PHP/' . phpversion();


mail($to, $subject, "Name : $name\n\nE-Mail : $email\n\nMessage : $message", $headers) or die("Error!");
echo "Thank you for the response! We will get back to you soon.";
?>


