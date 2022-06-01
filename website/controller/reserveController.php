<?php
session_start();
require '../model/modelRes.php';
try
{
    $docid = htmlspecialchars(stripslashes(trim($_POST['docid'])));
    $userid = $_SESSION['USER_ID'];
    /*$resdate = $_SESSION['resdate'];*/
    $resdate = htmlspecialchars(stripslashes(trim($_POST['resdate'])));
    $restime = htmlspecialchars(stripslashes(trim($_POST['restime'])));

    addRes($resdate,$restime,$_SESSION['USER_ID'],$docid);
    header('Location: ../view/success.php');
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}