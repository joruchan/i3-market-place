<?php
include '../partials/header.php';
?>

<main>
<div class="container">
    <h1>Login In</h1>

    <form action="#" method="POST" class="row">
        <div class="input-field col s6">
          <input id="user-name" type="text" name="user-name" class="validate">
          <label for="user-name">User Name</label>
        </div>
        <div class="input-field col s6">
            <input id="user-password" type="password" name="user-password" class="validate">
            <label for="user-password">Password</label>
        </div>
    </form>

</div>

</main>


<?php
include '../partials/footer.php';
?>