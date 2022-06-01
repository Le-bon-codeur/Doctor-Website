<?php
session_start();
require '../model/modelAdmin.php';
try
{
    $action = htmlspecialchars(stripslashes(trim($_GET['action'])));
    $subject = htmlspecialchars(stripslashes(trim($_GET['subject'])));

    $UserType = "";
    if($subject === "doc") $UserType = "Docteur";
    if($subject === "user") $UserType = "Utilisateur";
    if($subject === "labo") $UserType = "Laboratoire";

    $UserArray = "";
    if($subject === "doc") $UserArray = getDocs();
    if($subject === "user") $UserArray = getUsers();
    if($subject === "labo") $UserArray = getLabos();

    require '../view/adminForm.php';
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}