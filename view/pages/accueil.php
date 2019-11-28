<?php
include '../partials/head.php';
?>

<main id="accueil">
    <div class="container">
    <img id="logo" src="../../assets/img/Logo.png" alt="">

<<<<<<< HEAD
        <form action="../dataDB/signIn.php" method="POST" class="row" id="login">
            <div class="input-field col s6">
            <input id="user-email" type="email" name="user-email" class="validate">
            <label for="user-email">User Name</label>
=======
        <form action="#" method="POST" class="row" id="login">
            <div class="input-field">
                <input id="user-name" type="text" name="user-name" class="validate">
                <label for="user-name">User Name</label>
>>>>>>> 30cd0d0f649296b4c245e535832417c97f632486
            </div>
            <div class="input-field">
                <input id="user-password" type="password" name="user-password" class="validate">
                <label for="user-password">Password</label>
            </div>
            <button class="waves-effect waves-light btn" type='submit'>Log me in</button>
        </form>
        <!-- <script src='../../assets/js/app/signIn.js'></script> -->
    </div>
</main>


<?php
include '../partials/footer.php';
?>