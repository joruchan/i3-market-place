<?php
include '../partials/head.php';
?>

<main>
    <div class="container">
        <h1>Login In</h1>

        <form action="../dataDB/signIn.php" method="POST" class="row" id="login">
            <div class="input-field col s6">
            <input id="user-email" type="email" name="user-email" class="validate">
            <label for="user-email">User Name</label>
            </div>
            <div class="input-field col s6">
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