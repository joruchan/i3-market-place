<?php 
session_start();


include"../../config/config.php";

try{

    $bdd = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='
    .DBCHARSET,DBUSER,DBPASS); 
}
catch(Exception $e){
    var_dump($e);
    echo $e->getMessage();
    die();
}

    $email = $_POST["user-email"];
    $pass = $_POST["user-password"];
    
    $sql = "SELECT * FROM user WHERE userEmail=:email"; // AND pass=:pass";
    $statement = $bdd->prepare($sql);
    $statement->bindValue(":email", $email);
    //$statement->bindValue(":pass", $pass);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    
    if ($users != null && password_verify($pass, $users[0]["password"])){
        $_SESSION['log'] = true;
        $_SESSION['id'] = $users[0]["idUser"];
        header("location: http://localhost/Hackathon/i3-market-place/view/pages/");
    }
    else {
        header("location: http://localhost/Hackathon/i3-market-place/view/pages/accueil.php");
    }

?>