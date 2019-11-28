<?php
include '../partials/head.php';
?>

<main id="accueil">
    <div class="container">

        <form action="#" method="POST" class="row" id="login">
            <div class="input-field">
                <input id="user-name" type="text" name="user-name" class="validate">
                <label for="user-name">User Name</label>
            </div>
            <div class="input-field">
                <input id="user-password" type="password" name="user-password" class="validate">
                <label for="user-password">Password</label>
            </div>
            <a class="waves-effect waves-light btn">Log me in</a>
        </form>
    </div>
</main>


<?php
include '../partials/footer.php';
?>