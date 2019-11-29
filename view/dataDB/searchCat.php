<?php

include"../../config/config.php";


$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);

    $search = $_POST['search'];
    
        $j = $db->prepare("SELECT * FROM product INNER JOIN productcategory ON product.idProduct = productcategory.idProduct INNER JOIN category ON productcategory.idCategory = category.idCategory WHERE category.categoryName = :search ");
        $j->bindValue(':search', ucfirst(strtolower($search)));
        $j->execute();
        $donnees = $j->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($donnees);    

?>