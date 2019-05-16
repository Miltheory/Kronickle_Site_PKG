<?php

if($_POST) {

    $my_mailbox_key = hash("sha256", "2Wsp779Xa227R8qR");
    $my_mailbox_iv = substr(hash("sha256", "uv2v3849mm6J2uh8"), 0, 16);

    $my_user_name = $_REQUEST["name"];
    $my_user_email = $_REQUEST["email"];
    $my_user_companyname = $_REQUEST["companyname"];
    $my_user_companytype = $_REQUEST["companytype"];
    $my_user_message = $_REQUEST["message"];
    $my_user_mailbox = openssl_decrypt(base64_decode($_REQUEST["mailbox"]), "AES-256-CBC", $my_mailbox_key, 0, $my_mailbox_iv);

    $my_mail_recipient = $my_user_mailbox;
    $my_mail_subject = "Kronickle: Contact";
    $my_mail_headers = "From: " . $my_user_name . "<" . $my_user_email . ">";

    $my_mail_message .= "You have a message from: " . $my_user_name . "\n";
    $my_mail_message .= "\n--\n\n";
    $my_mail_message .= "Name: $my_user_name\n";
    $my_mail_message .= "Email: $my_user_email\n";
    $my_mail_message .= "Company Name: $my_user_companyname\n";
    $my_mail_message .= "Company Type: $my_user_companytype\n";
    $my_mail_message .= "Message: $my_user_message\n";

    mail($my_mail_recipient, $my_mail_subject, $my_mail_message, $my_mail_headers);

} else {

    header("Location: /");

}

?>