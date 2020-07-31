<?php
    include_once ("../functions/connection_db.php");

    $user = $_SESSION['user'];
    $membre = $_SESSION['membre'];
    $message = htmlspecialchars(trim($_POST{'message'}));
    global $db;

    $req = $db->prepare('INSERT INTO messages(sender,receiver,message,date) VALUES(:sender,:receiver,:msg,NOW())');
    $req->execute(array(
        "sender"=>$user,
        "receiver"=>$membre,
        "msg"=>$message
    ));

    



