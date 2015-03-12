<?php
    // Vars
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $hello = $_POST['hello'];
    
    if($hello != '') {
        echo false;
        exit;
        // spam robot
    }
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $email. "\r\n";
    //$headers .= 'Cc:' . $email. "\r\n";
    $template = 'Name:' . $name . '<br/>'
    . 'Email:' . $email . '<br/>'
    . 'Phonenumber:' . $number . '<br/>'
    . 'Subject:' . $subject . '<br/>'
    . 'Message:' . $message . '<br/><br/>';

    $sendmessage = wordwrap($template, 70);

    mail("mcassano@jaga.be", $subject, $sendmessage, $headers);
    echo true;
    
?>