<?php

if($_POST){
	$function = $_POST['function'];
	
	switch($function){
		
		case'postedproject':
		postedproject();
		break;
		
	}
}

function postedproject(){
	global $db;
$subj = $_POST['mg_subj'];
$email = $_POST['email'];
$desc = $_POST['message'];
$name = $_POST['name'];
	$to = "info@omegalord.com";
    $subject = "NEW MESSAGE RECEIVED";
    $message = "
    <html>
    <head>
    <title>PROJECT REQUEST</title>
    </head>
    <body>
    <h5>Client Name ".$name."</h5>
    <h5>Client Account ".$email."</h5>
    <h5>subject ".$subj."</h5>
    <h5>MESSAGE: ".$desc."</h5>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: '.$email.'' . "\r\n";
	if(mail($to,$subject,$message,$headers)){
	echo'added';
	}

}



?>