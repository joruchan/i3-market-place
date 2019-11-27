<?php

include"../../config/config.php";


$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);
    $users = [];
    $q = $db->prepare('SELECT * FROM product');
    $q->execute();
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($donnees);
    
?>
