<?php 
if(isset($_POST['submit'])){
    $to = "mitchelbilson@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Contact";
    $subject2 = "Copy of your Contact";
    $message = $first_name . "wrote the following:" . "\n\n" . $_POST['Feedback'];
    $message2 = "Here is a copy of your Feedback" . $first_name . "\n\n" . $_POST['Feedback'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>