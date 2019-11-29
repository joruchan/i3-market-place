<?php
    session_start();
    unset ($_SESSION["log"]);
    unset ($_SESSION["id"]);
    header("location: ../pages/accueil.php");
?>