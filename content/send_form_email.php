<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Client Request</title>
</head>

<body>


<?php

$email_to = "info@wagnercarpetsroc.com";
$email_subject = "Customer Information Request";
 
// Escape user inputs for security - references the name attribute on the contact page in the POST 

$customer_name = $_POST['clientname'];
$customer_email = $_POST['email'];
$customer_phone = $_POST['phone'];
	
$on_site_estimate = $_POST['onsiteestimate'];
	
$additional_comments = $_POST['comments'];

                        


//sends user an email with relevant information
$email_message = "
				 <html>
				 <head>
				 <title>Customer Form Submission</title>
				 <style>
				 .data {
					 display:inline;
					 font-size:11pt;
				 }
				 
				 h4 {
					display:inline;
					font-size:12pt;
				 }
				 
				 h2 {
					 font-size:16pt;
				 }
				 </style>
				 </head>
				 <body>".
				 "<div><h4>Name: </h4>". "<div class='data'>". $customer_name. "</div></div>".
				 "<div><h4>Email: </h4>". "<div class='data'>". $customer_email. "</div></div>".
				 "<div><h4>Phone: </h4>". "<div class='data'>". $customer_phone. "</div></div>".
	
				 "<div><h4>On Site Estimate: </h4>". "<div class='data'>". $on_site_estimate. "</div></div>".
	
				 "<div><h4>Comments: </h4>". "<div class='data'>". $additional_comments. "</div></div>".
				 "</body>
				  </html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$customer_email. "\r\n";
$headers .= 'Cc: bjrodell@gmail.com' . "\r\n";


mail($email_to, $email_subject, $email_message, $headers);
 


?>

<h2>Thank You For Your Submission. We will contact you shortly.</h2>
<a href="../index.html">Home</a>

</body>
</html>