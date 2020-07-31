<?php
   session_start();       
    $dbhost = 'localhost';
    $dbname = 'freelance';
    $dbuser = 'root';
    $dbpswd = 'root';

    try
      {
         $db= new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         }
         catch(Exception $e)
            {
            die('Erreur : '.$e->getMessage());
            }  

            function islogged(){
               if (isset($_SESSION['user'])) {
                   $log = 1;
               }
               else {
                   $log = 0;
               }
               return $log;
           }

          