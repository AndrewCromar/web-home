<!-- ENDPOINT FOR CLAUDE TO PING WHEN FINISHING TASKS -->
<!-- SENDS AN EMAIL NOTIFICATION TO THE ADDRESS PASSED IN THE URL -->

<?php

$secret = 'boobs';
$use_custom_from = true;

if (!isset($_GET['key']) || $_GET['key'] !== $secret) {
    http_response_code(403);
    exit('Forbidden');
}

if (!isset($_GET['to']) || trim($_GET['to']) === '') {
    http_response_code(400);
    exit('Missing "to" parameter');
}

$to = trim(urldecode($_GET['to']));

if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Invalid "to" email address');
}

$msg = isset($_GET['msg']) ? urldecode($_GET['msg']) : '(No message provided)';
$subject = isset($_GET['subject']) ? urldecode($_GET['subject']) : 'Claude finished a task';

$body = "Hello,\n\nClaude just finished a task:\n\n" . $msg . "\n\nThanks,\nAutomated Andrew";

if ($use_custom_from) {
    $from = 'notifacations@andrewcromar.org';
    $headers = "From: Automated Andrew <{$from}>\r\n";
    $headers .= "Reply-To: {$from}\r\n";
    mail($to, $subject, $body, $headers);
} else {
    mail($to, $subject, $body);
}

echo 'Email sent.';
