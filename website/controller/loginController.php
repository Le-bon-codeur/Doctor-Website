<?php
session_start();
require('../model/db.php');
try
{
    session_unset($_SESSION["ERROR"]);
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $pw = pw_hash(htmlspecialchars(stripslashes(trim($_POST['pw']))));
    if(!preg_match("/^[A-Za-z .'-]+$/", $name)) $name_error = 'Invalid name';
    if(strlen($pw) === 0) $pw_error = 'Invalid password';
    if(isset($name_error)) throw new Exception($name_error);
    if(isset($pw_error)) throw new Exception($pw_error);
    $_SESSION["IS_ADMIN"] = login($name,$pw);
    $_SESSION["LOGGED_USER"] = $name;
    header('Location: ../view/home.php');
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}