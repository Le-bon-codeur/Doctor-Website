<?php
session_start();
require '../model/modelDoc.php';
try
{
    $doctype = htmlspecialchars(stripslashes(trim($_POST['doctype'])));
    $res = getDoc($doctype);
    require '../view/consultation.php';
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}