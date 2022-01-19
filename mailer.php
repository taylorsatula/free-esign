<?php
// Resume the session
session_start();
?>
<?php
date_default_timezone_set('America/Chicago');               // YOU MUST SET THE TIMEZONE BEFORE YOU CAN USE THE SCRIPT
$currentDate = date('m-d-Y');                                   // https://www.php.net/manual/en/timezones.america.php
$timestamp = date('l jS \of F Y h:i:s A');
$servicesRendered = $_SESSION['servicesRendered'];
$totalPrice = $_SESSION['totalPrice'];
$providerName = $_SESSION['providerName'];
$providerEmail = $_SESSION['providerEmail'];
$providerAddress = $_SESSION['providerAddress'];
$providerTechnician = $_SESSION['providerTechnician'];
$clientName = $_SESSION['clientName'];
$clientEmail = $_SESSION['clientEmail'];
$clientAddress = $_SESSION['clientAddress'];
$clientSignature = $_POST['clientSignature'];
$clientServiceDate = $_SESSION['clientServiceDate'];
$mailerbody = require('mailer_body.php')

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// To and Subject
$to .= "${clientEmail}";
$subject .= "Contract between ${providerName} and ${clientName} dated ${currentDate}";

// From and CC'd to myself for a while so I know they're reliably getting the email
$headers .= 'From: COMPANY NAME <contracts@COMPANYNAME.COM>' . "\r\n"; // fwiw I created a new email address "contracts@" so they can always be sent there and kept safe and away from other emails
$headers .= 'Cc: YOUR NAME <you@COMPANYNAME.COM>' . "\r\n"; // I cc myself so I can keep track of who's getting the email. This is not a required field.

$message .= "${mailerbody}";

mail($to,$subject,$message,$headers);
// send it all out
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>|[ SENT ]| COMPANYNAME</title>
    <style>body {width: 323px;font-family: sans-serif;margin-left: auto; margin-right: auto;}</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
    <h1>&lpar;&apos;&#x30fb;&#x203f;&#x30fb;&apos;&rpar; &#x1f44d;</h1>
    <p>A copy of our contract has been sent to:<br><?php echo($_SESSION['clientEmail']) ?>
    <br>We have also retained a copy.</p>
    <br>
    <p>Thank you for your business!</p>
    <img src="COMPANYNAMELOGO.png" alt="COMPANYNAMELOGO" style="width: 100px;">
</body>
</html>

<?php
//  wipe the tables and turn the lights out
 session_destroy();
?>