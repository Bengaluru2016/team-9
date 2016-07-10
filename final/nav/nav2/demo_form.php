<?php
include('Mail.php');

    $from = "<lokakshamitha@gmail.com>";
    $to = "<lokakshamitha@gmail.com>";
    $subject = "Hi!";
    $body = "Hi,You've been challenged by your colleague.";

    $host = "smtp.gmail.com";
    $port = "465";
    $username = "lokakshamitha@gmail.com";
    $password = "abhinav72";

    $headers = array ('From' => $from,
      'To' => $to,
      'Subject' => $subject);
    $smtp = Mail::factory('smtp',
      array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
      echo("<p>" . $mail->getMessage() . "</p>");
    } else {
      echo("<p>Message successfully sent!</p>");
    }
?>
