<?php 

session_start();

include"../../config/config.php";


$db = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS);

$email = $_POST['user-email'];
$nom = $_POST['user-name'];
$pass = $_POST['user-password'];
$group = $_POST['user-group'];



$uploadDir = "../../assets/img/imgUpload/";
$idUnique = uniqid().date("Y-m-d-h-i-s");
$uploadFile = $uploadDir.$idUnique.$_POST['user-img'];
$photo = $uploadDir.$idUnique.$_POST['user-img'];
move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile );


$imgUser = ($_POST['user-img'] !== '' )? $photo : 'https://robohash.org/'.$nom.'.png';

$pass_hash = password_hash ($pass, PASSWORD_DEFAULT,['cost'=>12]);


// pour verifier => password_verify($pass, $pass_hash)


$q = $db->prepare('INSERT INTO user(userEmail, password, userName, userGroup, imgProfile)'
            . ' VALUES(:userEmail, :password, :userName, :userGroup, :imgProfile)');
    $q->bindValue(':userEmail', $email);
    $q->bindValue(':password', $pass_hash);
    $q->bindValue(':userName', $nom);
    $q->bindValue(':userGroup', $group);
    $q->bindValue(':imgProfile', $imgUser);

    
    $q->execute();



?>