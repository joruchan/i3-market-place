
<?php

include"../../config/config.php";

$catArray = array("Baby items","Bags","Books","Clothes","Creative Hobbies","Electronics","Furniture","Hygiene","Jewelry","Kitchenware","Miscellaneous","Movies","Music","Pet Accessories","Services","Shoes","Sports articles","Tickets","Video Games");

$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);

    $search = $_POST['search'];
    
    if(in_array($search, $catArray)){
        $j = $db->prepare("SELECT * FROM product INNER JOIN productcategory ON product.idProduct = productcategory.idProduct INNER JOIN category ON productcategory.idCategory = category.idCategory WHERE category.categoryName = :search ");
        $j->bindValue(':search', $search);
        $j->execute();
        $donnees = $j->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($donnees);    

    }else{
        $q = $db->prepare("SELECT * FROM product WHERE LOWER(productName) LIKE :search");
        $q->bindValue(':search', '%'.$search.'%');
        $q->execute();
        $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($donnees);    
    }

    
?>