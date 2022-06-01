<?php
require('../model/db.php');

function getUsers()
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT fname, lname, userid FROM user WHERE userid NOT IN (SELECT u.userid FROM user u, staff s WHERE u.userid = s.userid);");
        return $req;
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function getDocs()
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT fname, lname, u.userid FROM user u, staff s WHERE u.userid = s.userid AND speciality != \"Admin\";");
        return $req;
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function getLabos()
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT laboid, type FROM labo;");
        return $req;
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function deleteUser($fname, $lname) {
    try {
        $db = db_init();
        $req = $db -> query("SELECT userid FROM user WHERE fname = \"$fname\" AND lname = \"$lname\";");
        $res = $req -> fetch();
        $id = $res['userid'];
        $db -> query("DELETE FROM patient WHERE userid= $id");
        $db -> query("DELETE FROM user WHERE userid= $id");
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function deleteDoc($fname, $lname) {
    try {
        $db = db_init();
        $req = $db -> query("SELECT userid FROM user WHERE fname = \"$fname\" AND lname = \"$lname\";");
        $res = $req -> fetch();
        $id = $res['userid'];
        $db -> query("DELETE FROM staff WHERE userid= $id");
        $db -> query("DELETE FROM user WHERE userid= $id");
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function deleteLabo($id) {
    try {
        $db = db_init();
        $db -> query("DELETE FROM labo WHERE laboid= $id");
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function addUser($fname,$lname,$dob,$num,$mail,$address,$socialno) {
    try {
        $db = db_init();
        $db -> query("INSERT INTO user(fname,lname,dob,tel,mail,photopath) VALUES (\"$fname\", \"$lname\", \"$dob\", \"$num\", \"$mail\", NULL);");
        $req = $db -> query("SELECT userid FROM user WHERE fname = \"$fname\" AND lname = \"$lname\";");
        $res = $req -> fetch();
        $id = $res['userid'];
        $db -> query("INSERT INTO patient VALUES(\"$socialno\", \"$address\", $id);");
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function addDoc($fname,$lname,$dob,$num,$mail,$speciality,$room) {
    try {
        $db = db_init();
        $db -> query("INSERT INTO user(fname,lname,dob,tel,mail,photopath) VALUES (\"$fname\", \"$lname\", \"$dob\", \"$num\", \"$mail\", NULL);");
        $req = $db -> query("SELECT userid FROM user WHERE fname = \"$fname\" AND lname = \"$lname\";");
        $res = $req -> fetch();
        $id = $res['userid'];
        $db -> query("INSERT INTO staff VALUES(\"$speciality\", \"$room\", \"1\", $id);");
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function addLabo($type,$room) {
    try {
        $db = db_init();
        $db -> query("INSERT INTO labo(type,dispo,room) VALUES (\"$type\", \"1\", \"$room\");");
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}