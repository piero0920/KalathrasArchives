<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "kalathra@nw3.fcomet.com";
    $headers = "De: ".$mailFrom;
    $text = $mailFrom. "\n" .$name." envio un correo. \n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: info.html?mailsend");
}
