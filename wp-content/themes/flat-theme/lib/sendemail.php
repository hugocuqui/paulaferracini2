<?php
    header('Content-type: application/json');

    $status = array(
        'type'=>'success',
        'message'=>'Email sent!'
    );

    $name = @trim(stripslashes($_POST['name']));
    $email = @trim(stripslashes($_POST['email']));
    $phone = @trim(stripslashes($_POST['phone']));
    $message = @trim(stripslashes($_POST['message']));


    $email_from = $email;
    $email_to = zee_option('zee_contact_email');

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'phone: ' . $phone . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, 'Contato', $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
