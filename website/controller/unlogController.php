<?php
session_start();
require('../model/db.php');
try
{
    session_unset($_SESSION["ERROR"]);
    if(isset($_POST['profile'])) $input = 1;
    if(isset($_POST['disconnect'])) $input = 2;
    if($input == 1) {
        // TODO
        // aller sur la page profile
    }
    if($input == 2) {
        session_unset();
    }
    header('Location: ../view/home.php');
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}