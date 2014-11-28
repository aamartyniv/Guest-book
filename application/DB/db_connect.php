<?php

$config = include_once "../../config/config.php";

function dbConnect (array $config)
{
    try {

        $db = new PDO('mysql:host=' . $config['db.host'] . ';dbname=' . $config['db.name'] . '', $config['db.user'], $config['db.password']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("set names utf8");
        return $db;

    } catch (PDOException $e) {

        // alex here you must create file 'log.txt'
        // errors must write in file 'log.txt'
        echo 'we have connect problem';
    }
}
