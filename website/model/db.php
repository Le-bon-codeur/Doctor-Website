<?php

function db_init()
{
    $ini = parse_ini_file('config.ini');
    $hostname = $ini['hostname'];
    $username = $ini['username'];
    $password = $ini['password'];
    $db = $ini['db'];
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        throw new Exception("Cannot connect to the database...");
    }
}

function pw_hash($_pw)
{
    return hash('sha256', $_pw);
}

function login($_username, $_pw)
{
    $db = db_init();
    $req = $db -> query("SELECT * FROM connection WHERE name = \"" . $_username . "\" AND pw = \"" . $_pw . "\"");
    $res = $req -> fetch();
    if(!$res) {
        throw new Exception('Unknown user...');
    } else {
        $_SESSION['USER_ID'] = $res['userid'];
        return $res['admin'];
    }
}