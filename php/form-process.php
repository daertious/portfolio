<?php 
if(isset($_POST['submit'])){
    $to = "diwnore@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $message = " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message "  . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$message,$headers);
    mail($from,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>