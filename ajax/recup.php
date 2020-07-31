<?php
    include_once ("../functions/connection_db.php");

global $db;
$user = $_SESSION['user'];
$membre =$_SESSION['membre'];

$req = $db->prepare("SELECT * FROM messages WHERE (sender=:sen AND receiver=:rec) OR (sender=:rec AND receiver=:sen)");
//$req = $db->query('SELECT * FROM messages');
$req->execute(array(
    'sen'=>$user,
    'rec'=>$membre
));
$response = $req->fetchAll();

foreach($response as $reponse){
    ?>
    <div class="d-flex mb-4  <?php echo ($reponse['sender'] == $membre) ? 'justify-content-start' : 'justify-content-end' ?>  ">
        <div class="message <?php echo ($reponse['sender'] == $membre) ? 'msg_cotainer' : 'msg_cotainer_send' ?>">
            <?= $reponse['message'] ?>

        </div>
        </div>
        <br/><br/>

    <?php
}