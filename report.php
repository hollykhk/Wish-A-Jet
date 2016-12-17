<?php header( 'Location: /index.html') ; ?>
<?php
	$fname = $_POST[$'fname'];
	$lname = $_POST[$'lname'];
	$mail = $_POST[$'mail'];
	$departure = $_POST[$'departure'];
	$arrival = $_POST[$'arrival'];
	$reason = $_POST[$'reason'];
	$pay = $_POST[$'pay'];
	$additional = $POST[$'additional'];

	$to = 'holly.kwan@protonmail.com';
	$subject = 'New Submission from Wish-A-Jet Foundation';
	$msg = "$lname, $fname had requested Wish A Jet Services to enquire on the behalf of the requesters to owners of personal jets. The requester would like to depart from $departure to $arrival with the reason of the request of the user is $reason and contribute by $pay\n"

 	"In additional to the request is $additional"; 
	mail($to, $subject, $msg, "From:" . $mail);

	echo 'Thank you for requesting to fly private from Wish-A-Jet Service.<br />';
	echo 'We will contact owners of private jets in your behalf. If there is a match for you, ' . $fname . 'we will attempt to contact you or publishlize the matched information online. Wish-A-Jet Service is please to know that you are interested in flying private from ' . $departure . 'to ' .$arrival . ' as you enter your reason, how you would pay for it, and additional information.<br />';
	echo 'Thank you again for using Wish-A-Jet Service.'


?>
