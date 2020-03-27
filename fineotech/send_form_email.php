<?php
if ($_POST['recaptcha']) {
    // access
    $secretKey = '6LcbOr8UAAAAAFWlP8ycarR6fzWqSGIUoixM5Ezz';

    if (file_exists('lib/class.phpmailer.php')) {
        require_once 'lib/class.phpmailer.php';
    }
    if (file_exists('lib/class.smtp.php')) {
        require_once 'lib/class.smtp.php';
    }

    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $_POST['recaptcha']);
    $responseData = json_decode($verifyResponse);

    if ($responseData->success) {
        $to = "info@fineotech.io";
        $replay = trim($_POST['email']);
        $name = trim($_POST['name']);
        $subject = trim($_POST['subject']);
        $message = $_POST['message'];

        $body = "
        <html>
        <head>
        <title>Fineotech Contact Form</title>
        </head>
        <body>
        ";
        $body .= "<table>";
        $body .= "<tr><td>Name :</td><td>" . $name . "</td></tr>";
        $body .= "<tr><td>Email :</td><td>" . $replay . "</td></tr>";
        $body .= "<tr><td>Message :</td><td>" . $message . "</td></tr>";
        $body .= "</table>";
        $body .= "</body></html>";
        $mailConfig = [
            "host" => "smtp.gmail.com",
            "smtp_debug" => 0,
            "smtp_auth" => true,
            "username" => "info@fineotech.io",
            "password" => "JayMaharaj7#",
            "smtp_secure" => "tls",
            "port" => 587,
            "from" => "info@fineotech.io",
            "from_name" => "Mailer",
        ];
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = $mailConfig['smtp_debug'];
        $mail->isSMTP();
        $mail->Host = $mailConfig['host'];
        $mail->SMTPAuth = $mailConfig['smtp_auth'];
        $mail->SMTPSecure = $mailConfig['smtp_secure'];
        $mail->Port = $mailConfig['port'];
        $mail->From = $mailConfig['from'];
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        $mail->Username = $mailConfig['username'];
        $mail->Password = $mailConfig['password'];
        $mail->FromName = $mailConfig['from_name'];
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        if ($mail->Send()) {
            echo "success";
        } else {
            echo "There was an error trying to send your message. Please try again later.";
        }
    } else {
        echo "Robot verification failed, please try again.";
    }
} else {
    echo "Please click on the reCAPTCHA box.";
}