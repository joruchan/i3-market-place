<?php 

session_start();

include"../../config/config.php";


$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);


$cat =  $_SESSION['cat'];
$prodNom =  $_SESSION['nomProd'];




$categoryGet = $db->prepare('SELECT * FROM category WHERE categoryName = :catname');
$categoryGet->bindValue(':catname', $cat);

$categoryGet->execute();
$categorie = $categoryGet->fetchAll(PDO::FETCH_ASSOC);

$categorieID = $categorie[0]['idCategory'];


$productGet = $db->prepare('SELECT * FROM product WHERE productName = :prodName');
$productGet->bindValue(':prodName', $prodNom);

$productGet->execute();
$product = $productGet->fetchAll(PDO::FETCH_ASSOC);

$productID = $product[0]['idProduct'];


$p = $db->prepare('INSERT INTO productcategory(idProduct, idCategory)'
            . ' VALUES(:productId, :catId)');
    $p->bindValue(':productId', $productID);
    $p->bindValue(':catId', $categorieID);

    
    $p->execute();



    unset ($_SESSION["cat"]);
    unset ($_SESSION["nomProd"]);

    header('location: ../pages');

?>