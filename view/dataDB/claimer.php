<?php 

session_start();

include"../../config/config.php";


$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);


$prodId = $_POST["productId"];
$claimer = $_SESSION["id"];


$q = $db->prepare('UPDATE product SET claimer = :claimer WHERE product.idProduct = :prodId');
    $q->bindValue(':claimer', $claimer);
    $q->bindValue(':prodId', $prodId);
    
    $q->execute();



?>