<?php
$to      = str_replace(' ', '-', strtolower($argv[2])). '@team.idonethis.com';
$subject = 'Re: '. $argv[2] . ' digest for ' . date("F d");
$message = addslashes($argv[3]);
$sender = $argv[1];
$headers = 'From: ' . $sender . "\r\n";

mail($to, $subject, $message, $headers);