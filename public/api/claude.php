<?php
// Endpoint for Claude to ping when finishing tasks.
// Sends an email notification to Andrew.

// $secret = 'boobs';
// $use_custom_from = true;
// $to = 'andrewmcromar@gmail.com';

// if (!isset($_GET['key']) || $_GET['key'] !== $secret) {
//     http_response_code(403);
//     exit('Forbidden');
// }

// $msg = isset($_GET['msg']) ? urldecode($_GET['msg']) : '(No message provided)';
// $subject = isset($_GET['subject']) ? urldecode($_GET['subject']) : 'Claude finished a task';

// $body = "Hello,\n\nClaude just finished a task:\n\n" . $msg . "\n\nThanks,\nAutomated Andrew";

// if ($use_custom_from) {
//     $from = 'notifacations@andrewcromar.org';
//     $headers = "From: Automated Andrew <{$from}>\r\n";
//     $headers .= "Reply-To: {$from}\r\n";
//     mail($to, $subject, $body, $headers);
// } else {
//     mail($to, $subject, $body);
// }

// echo 'Email sent.';
