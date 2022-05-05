<?php 
if(isset($_POST['submit'])){
    /*$to = "c23taylor.coffey@afacademy.af.edu"; // this is your Email address
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['paragraph'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['paragraph'];

    mail($to,$subject,$message,$headers);
    header("location: contact.php"); */
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $to = "c23taylor.coffey@afacademy.af.edu, c22tia.kolakowski@afacademy.af.edu";
    $from = "Chicken Farms";
    $subject = "Contact Form Submission";
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['paragraph'] . "\n\n" . "Email: " . $_POST['emailAddress'];
    $headers = "From: " . $from;
    mail($to,$subject,$message, $headers);
    header("location: index.html");;
?>
