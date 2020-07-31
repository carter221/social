<?php

//include_once ('connection_db.php');

function getmembers(){
    global $db;
    $req = $db->query('SELECT * FROM users');
    $response = $req->fetchAll();
    return $response;
}

