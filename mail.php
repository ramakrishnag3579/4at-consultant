<?php

if ( $_POST ) {

	$frm_name  = '4AT consulting'; // your name
	$recepient = 'Info@consult-4at.com'; // your e-mail
	$sitename  = '4AT consulting'; // your site name
	$subject   = "New contact from \"$sitename\""; // subject template

	$name  = trim( $_POST['visitor_name'] );
	$email = trim( $_POST['visitor_email'] );
	$msg   = trim( $_POST['visitor_msg'] );

	$message = "
	-------------------<br><br>
	Visitor name: $name <br>
	Visitor email: $email <br><br>
	$msg
	<br><br>-------------------
	";

	mail( $recepient, $subject, $message, "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset="utf-8"' );

}
