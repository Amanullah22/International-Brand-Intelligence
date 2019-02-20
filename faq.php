<?php 
if(isset($_POST['faq'])){
    $to = "m.amanullahkhan@yahoo.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['sender_name'];
	if (!isset($_POST['message'])){
	$_POST['message'] = "No Message";}
	$faq = $_POST['message'];
	$phone = $_POST['phone'];
    $subject = "FAQ - International Brand Intelligence";
    $subject2 = "Copy of FAQ - International Brand Intelligence";
    $message = "Name: " . $name . "\n\nEmail: " . $from .  "\n\nContact # " . $phone . "\n\nFAQ: " . $faq;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $faq;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	header("Location: feedback.html");
    }
?>
