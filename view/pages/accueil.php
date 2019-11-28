<?php
include '../partials/head.php';
?>

<main id="accueil">
    <div class="container">
    <img id="logo" src="../../assets/img/Logo.png" alt="">

        <form action="../dataDB/signIn.php" method="POST" class="row" id="login">
            <div class="input-field">
                <input id="user-email" type="email" name="user-email" class="validate">
                <label for="user-email">Email</label>
            </div>
            <div class="input-field">
                <input id="user-password" type="password" name="user-password" class="validate">
                <label for="user-password">Password</label>
            </div>
            <button class="waves-effect waves-light btn" type='submit'>Log me in</button>
            <a href="./signup.php" class="waves-effect waves-light btn btn-register" >Register</a>
        </form>
        <!-- <script src='../../assets/js/app/signIn.js'></script> -->
    </div>
</main>


<?php
include '../partials/footer.php';
?>