<?php
include_once './businessFactory.php';
mail($receivers, $subject, $text, $headers);
//logging info

/* input for this file
in orther to send an email with this code you neeed to respect this structure:
{
    receivers : [],
    copy : [],
    text : "content of email",
    subject: "subject of the email"
}

*/

$receivers = addslashes($_POST['receivers']);
$copy = addslashes($_POST['copy']);
$text = addslashes($_POST['text']);
$subject = addslashes($_POST['subject']);


//constructing the header
$headers = 'From: business@business-prive.com'       . "\r\n" .
    'Reply-To: contact@business-prive.com' . "\r\n";
if ($copy) {
    $headers .= 'Cc: ' . $copy . "\r\n";
}
$headers .= 'X-Mailer: PHP/' . phpversion();

//if you want to test if you are sending the correct fields and u actually receiving them 
//echo "receivers : "  . $receivers . " copy :  " . $copy . "  text : " . $text . " Header: { $headers }";

try {
    //code...
    mail(
        $receivers,
        $subject,
        $text,
        $headers
    );
} catch (\Throwable $th) {
    //throw $th;
    echo json_encode("{ 'error' : $th }");
}
