<?php
require(dirname(__FILE__).'/webmaster/controller.php');

if($_REQUEST['name']!=''){

  $obj->insertdata('tbl_contact',$_POST);

/* Set e-mail recipient */
$myemail  = "marimuthuinchennai@gmail.com";


/* Let's prepare the message for the e-mail */

	$subject='Tamilpuzhavan Enquiry Form';	
		
	$message = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
</style>
  
</head>
<body>

<table>
<tr>
<td>Name</td>
<td>'.$_REQUEST['name'].'</td>
</tr>
<tr>
<td>Mobile</td>
<td>'.$_REQUEST['mobile'].'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$_REQUEST['email'].'</td>
</tr>

<tr>
<td>Message</td>
<td>'.$_REQUEST['msg'].'</td>
</tr>
<tr>
<td colspan="2" align="center">Details From Tamilpuzhavan</td>
</tr>
</table>
</body>
</html>';


/* Send the message using mail() function */
$from = 'webbitech@webbitech.com';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

$send=mail($myemail, $subject, $message,$headers);




if($send)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Message successfully Received. We will Contact You Soon..')
    window.location.href='contact-us';
    </SCRIPT>");
	
/* Redirect visitor to the thank you page */



}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('failed')
    window.location.href='contact-us';
    </SCRIPT>");
	

}

	
/* Redirect visitor to the thank you page */


exit();

}

?>


