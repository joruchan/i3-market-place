<?php
    session_start();
    unset ($_SESSION["log"]);
    unset ($_SESSION["id"]);
    header("location: http://localhost/Hackathon/i3-market-place/view/pages/signup.php");
?>