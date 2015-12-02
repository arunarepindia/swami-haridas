<?php
if(isset($_POST['getInvite']))
{
	echo "hiii";
//############### contact submit ##########################	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phoneNumber'];		  
	        $heading = $_POST['heading1'];
	        
	        $day1 = $_POST['day1'];
	        print_r($day1);
    print($heading1);
	$email_from = "info.sci.aru@gmail.com";
    $email_to = $email;
    $email_subject = "Invition Form";
    $email_message = '';
     // Error fuction 
    

    $email_message .= "Name: ".$name."\n";
	$email_message .= "Email: ".$email."\n";
	$email_message .= "Phone/Mobile no : ".$phone."\n";
	
	// include the from email in the headers
	$headers = "From: ".$email_from;

	// boundary
	$time = md5(time());
	$boundary = "==Multipart_Boundary_x{$time}x";

	// headers used for send attachment with email
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$boundary}\"";

	// multipart boundary
	$email_message = "--{$boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $email_message . "\n\n";
	$email_message .= "--{$boundary}\n";

// create email headers
		
$sendmail = mail($email_to, $email_subject, $email_message, $headers);
	
	if($sendmail){
	echo "mail sent!!";
	}	
}

?>