<?php
include_once ('connection_db.php');
 
function register($name,$prenom,$email,$password){
    global $db;
    $req=$db->prepare('INSERT INTO users(nom,prenom,email,password) VALUES(:name,:pren,:mail,:password)');
    $req->execute(array(
        'name' => $name,
        'pren' => $prenom,
        'mail' => $email,
        'password' => sha1($password)
    ));
}

function email_verif($email){
    global $db;
    $req = $db->prepare('SELECT email FROM users WHERE email=:mail');
    $req->execute(array(
        'mail' => $email
    ));
    $ans = $req->rowCount();

    return $ans;

}

function lencase($password){
    $verifpass ;
        if (strlen($password)<5) {
            $verfipass = false;
        }
        else {
            $verfipass = true;
        }
        
        return $verfipass;
}

function login($email,$mdp){
    global $db;

    $req = $db->prepare('SELECT email,password FROM users WHERE email = :mail AND password = :password');

    $req->execute(array(
        'mail'=>$email,
        'password'=>sha1($mdp)
        ));
    $ans = $req->rowCount();
    return $ans;

}

