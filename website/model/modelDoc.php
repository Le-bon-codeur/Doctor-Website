<?php
require('../model/db.php');

function getAllDoc()
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT * FROM staff s, user u WHERE s.speciality != \"Admin\" AND u.userid = s.userid;");
        return $req;
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function getDoc($speciality)
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT * FROM staff s, user u WHERE s.speciality = \"$speciality\" AND u.userid = s.userid;");
        return $req;
    } catch(PDOException $e) {
        throw new Exception($e->getMessage());
    }
}