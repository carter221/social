<?php
include_once ('connection_db.php');
function login($email,$mdp){
    global $db;
    $req = $db->prepare('SELECT email,password FROM users WHERE email=:mail,password=:mdp');
    $req->execute(array(
        'mail' => $email,
        'mdp' => $mdp
    ));
    $ans = $req->rowCount();

    return $ans;


}