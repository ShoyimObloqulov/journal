<?php
    function emailsend()
    {
    	$to      = 'obloqulovshoyim101@gmail.com';
	    $subject = 'the subject';
	    $message = 'hello';
	    $headers = 'From: bunyod0599@gmail.com'       . "\r\n" .
	                 'Reply-To: bunyod0599@gmail.com' . "\r\n" .
	                 'X-Mailer: PHP/' . phpversion();
	    mail($to, $subject, $message, $headers);
    }
?>