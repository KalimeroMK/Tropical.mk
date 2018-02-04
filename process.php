<?php

require_once 'header.php';

$name = $_POST['name'];
$email = $_POST['email'];
$poraka = $_POST['poraka'];


$subject = "Web mail from: " . $email;
$subject_client = "Добивте емаил од: " . $email;
$message_client = "Почитувани, ви благодариме што не контактиравте преку контакт формата на нашиот портал. Очекувајте одговор од нашиот оператор.<br>Со почит ТИМОТ на Shefot<br><br><br><br><br>\n\nИме: $name<br>\n\nEmail:$email<br>\n\nЦел: $cel<br>\n\nПорака:$poraka";


$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: Kontakt <bogoslovijampb@gmail.com>' . "\r\n";
$headers .= "From: " . $email . $name . "" . "\r\n";

if (isset($email) && $email != NULL) {

    $to = "bogoslovijampb@gmail.com";
    mail($to, $subject, $poraka, $headers);
    mail($email, $subject_client, $message_client, $headers);
    mail($from, 'RE: Online Form: ' . $subject, $_SERVER['REMOTE_ADDR'] . "\n\n" . $my_response, "From: bogoslovijampb@gmail.com");
    header("Location:index.php");
}
?>

