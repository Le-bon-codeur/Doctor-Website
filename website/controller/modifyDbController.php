<?php
session_start();
require '../model/modelAdmin.php';
try
{
    if(isset($_POST['action'])) $action = htmlspecialchars(stripslashes(trim($_POST['action'])));
    if(isset($_POST['subject'])) $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));

    if($action === "del") {
        if(isset($_POST['elem'])) $selection = htmlspecialchars(stripslashes(trim($_POST['elem'])));
        
        if($subject === "user") {
            $args = explode(" ", $selection);
            deleteUser($args[0], $args[1]);
        }

        if($subject === "doc") {
            $args = explode(" ", $selection);
            deleteDoc($args[0], $args[1]);
        }

        if($subject === "labo") {
            $args = explode(" ", $selection);
            deleteLabo($args[count($args)-1]);
        }
    } else {
        if(isset($_POST['fname'])) $fname = htmlspecialchars(stripslashes(trim($_POST['fname'])));
        if(isset($_POST['lname'])) $lname = htmlspecialchars(stripslashes(trim($_POST['lname'])));
        if(isset($_POST['email'])) $mail = htmlspecialchars(stripslashes(trim($_POST['email'])));
        if(isset($_POST['number'])) $num = htmlspecialchars(stripslashes(trim($_POST['number'])));
        if(isset($_POST['dob'])) $dob = htmlspecialchars(stripslashes(trim($_POST['dob'])));
        if(isset($_POST['speciality'])) $speciality = htmlspecialchars(stripslashes(trim($_POST['speciality'])));
        if(isset($_POST['room'])) $room = htmlspecialchars(stripslashes(trim($_POST['room'])));
        if(isset($_POST['type'])) $type = htmlspecialchars(stripslashes(trim($_POST['type'])));
        if(isset($_POST['socialno'])) $socialno = htmlspecialchars(stripslashes(trim($_POST['socialno'])));
        if(isset($_POST['address'])) $address = htmlspecialchars(stripslashes(trim($_POST['address'])));

        if($subject === "user") {
            addUser($fname,$lname,$dob,$num,$mail,$address,$socialno);
        }

        if($subject === "doc") {
            addDoc($fname,$lname,$dob,$num,$mail,$speciality,$room);
        }

        if($subject === "labo") {
            addLabo($type,$room);
        }
    }

    header('Location: ../view/successAdmin.php');
}
catch(Exception $e)
{
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}