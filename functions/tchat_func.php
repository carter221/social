<?php

function userExist(){
    global $db;
    $req = $db->prepare('SELECT * FROM users WHERE email = :mail AND email != :session');
     $req->execute(array(
        'mail'=>$_GET['user'],
        'session' => $_SESSION['user']
    ));
    $response = $req->rowCount();
    return $response;
}

function getUser(){
    global $db;
    $req = $db->prepare('SELECT * FROM users WHERE email = :mail');
    $req->execute(array(
        'mail' => $_SESSION['membre']
    ));
    $response = $req->fetchAll();
    return $response;
}