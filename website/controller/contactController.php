<?php
session_start();
try
{
    if(isset($_SESSION["ERROR"])) session_unset($_SESSION["ERROR"]);
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $number = htmlspecialchars(stripslashes(trim($_POST['number'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

    if(!preg_match("/^[A-Za-z .'-]+$/", $name)) $name_error = 'Invalid name';
    if(!preg_match("/^[A-Za-z0-9 .'-]+$/", $message)) $message_error = 'Invalid message';
    if(isset($name_error)) throw new Exception($name_error);
    if(isset($message_error)) throw new Exception($message_error);

    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];

    $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1><p><b>Email : </b>' . $_POST['email'] . '<br><b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

    $retour = mail('julien.mathieu@edu.ece.fr', 'Envoi depuis page Contact', $message, $entete);
    
    if(!$retour) throw new Exception("Erreur lors de l'envoi du message");
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}