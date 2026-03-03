<!-- THIS PAGE IS FOR THE AUTOMATED EMAILS WHEN I RESEARCH COLLEGE STUFF -->
<!-- A GITHUB ACTION WILL PING THE PAGE AND TRIGGER THE EMAIL -->

<?php

$secret = 'boobs';
$use_custom_from = true;

if (!isset($_GET['key']) || $_GET['key'] !== $secret) {
    http_response_code(403);
    exit('Forbidden');
}

$msg = isset($_GET['msg']) ? urldecode($_GET['msg']) : '(No message provided)';

$subject = "Andrew studied some college stuff! (" . date('Y-m-d H:i:s') . ")";

$body = "Hello Scott and Catherine,\n\nAndrew has been studying and he just finished a notable section.\n\nHere is what he worked on:\n\n" . $msg . "\n\nThanks,\nAutomated Andrew";

$to = 'andrewmcromar@gmail.com'; // for testing
// $to = 'scromar@gmail.com,catcromar@gmail.com';
$cc = 'andrewmcromar@gmail.com';

if ($use_custom_from) {
    $from = 'notifacations@andrewcromar.org';
    $headers = "From: Automated Andrew <{$from}>\r\n";
    $headers .= "Reply-To: {$from}\r\n";
    $headers .= "Cc: {$cc}\r\n";
    mail($to, $subject, $body, $headers);
} else {
    $headers = "Cc: {$cc}\r\n";
    mail($to, $subject, $body, $headers);
}

echo 'Email sent.';
