<?php 

session_start();

include"../../config/config.php";


$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);





if ($_POST['post-name'] == '' || $_POST['post-desc'] == '' || $_POST['post-cat'] == ''){

}else {

    $creator = $_SESSION['id'];
    $prodNom = $_POST['post-name'];
    $desc = $_POST['post-desc'];
    $cat = $_POST['post-cat'];

    $_SESSION['cat'] = $cat;
    $_SESSION['nomProd'] = $prodNom;
    
    $p = $db->prepare('SELECT * FROM category WHERE categoryName = :catNom');
    $p->bindValue(':catNom', $cat);
    $p->execute();
    $catFetch = $p->fetch(PDO::FETCH_ASSOC);
    $catImgDefault = $catFetch["defaultImg"];
    
    $uploadDir = "../../assets/img/imgProducts/";
    $idUnique = uniqid().date("Y-m-d-h-i-s");
    $uploadFile = $uploadDir.$idUnique.$_POST['post-img'];
    $photo = $uploadDir.$idUnique.$_POST['post-img'];
    
    $photoOrDefault = ($_POST['post-img'] == null) ? $catImgDefault : $photo;
    
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile );
    
    
    $q = $db->prepare('INSERT INTO product(productName, productImg, description, creationDate, creator)'
                . ' VALUES(:productName, :productImg, :description, :creationDate, :creator)');
        $q->bindValue(':productName', $prodNom);
        $q->bindValue(':productImg', $photoOrDefault);
        $q->bindValue(':description', $desc);
        $q->bindValue(':creationDate', date("Y-m-d"));
        $q->bindValue(':creator', $creator);
    
        
        $q->execute();    
}


?>