<?php
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $name 		= $_POST['name'];
    $email 		= $_POST['email'];
    $subject 	= $_POST['subject'];
    $message 		= $_POST['message'];
    $output 	= "Name: ".$name."\n\n Email: ".$email."\n\n Subject: ".$subject."\n\n Message: ".$message;
    //set your email address to receive messages
    $to 		= 'khenysson@hotmail.com';
    $headers	= 'Para: "'.$email.'"';

    // Send the email.
    if (mail($to, $name, $output, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Que legaaaal!!! Sua mensagem foi enviada";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Aconteceu algo de errado.";
    }

?>
