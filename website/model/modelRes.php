<?php
require('../model/db.php');

function getAllRes()
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT * FROM consultation;");
        return $req;
    } catch(PDOException $e) {
       throw new Exception($e->getMessage());
    }
}

function getResTimes($date, $docid)
{
    try {
        $db = db_init();
        $req = $db -> query("SELECT ctime FROM consultation WHERE cdate=\"$date\" AND docid=$docid;");
        return $req;
    } catch(PDOException $e) {
        throw new Exception($e->getMessage());
    }
}

function addRes($cdate,$ctime,$patid,$docid)
{
    try {
        $db = db_init();
        $db -> query("INSERT INTO consultation(cdate,ctime,price,patid,docid) VALUES (\"$cdate\",\"$ctime\",25,$patid,$docid);");
    } catch(PDOException $e) {
        throw new Exception($e->getMessage());
    }
}