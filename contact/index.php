<?php

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['myName']) AND empty($_POST['honeypot'])) {
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    $myType = $_POST['myType'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Host = 'mail.michaelledesma.webhostingforstudents.com';
    $mail->Username = 'phpmailer@michaelledesma.webhostingforstudents.com';
    $mail->Password = '!iSnW394';
    //$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@michaelledesma.webhostingforstudents.com', 'phpmailer');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('michael.ledesma15@pcc.edu', 'Michael Ledesma');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($myEmail, $myName)) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: $myEmail
Name: $myName
Type: $myType
Message: $myQuestion
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            echo "Mailer error " . $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        }
    }
}else {
    include 'contact.html.php';
}
?>