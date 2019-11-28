<?php
include '../partials/head.php';
?>

<main id="signup">
<div class="container">
<img id="logo" src="../../assets/img/Logo.png" alt="">
    <h1 id="titre">Sign Up</h1>

    <form id="sign-up" action="../dataDB/signupUsers.php" method="POST" class="row">
        <div class="input-field col m6">
          <input id="user-name" type="text" name="user-name" class="validate">
          <label for="user-name">User Name</label>
        </div>
        <div class="input-field col m6">
          <input id="user-email" type="email" name="user-email" class="validate">
          <label for="user-email">Email</label>
        </div>
        <div class="input-field col m6">
          <input id="user-password" type="password" name="user-password" class="validate">
          <label for="user-password">Password</label>
        </div>
        <div class="input-field col m6">
            <select id="user-group" name="user-group">
                <option value="" disabled selected>Choose your option</option>
                <option value="GAME">Game</option>
                <option value="WAD">WAD</option>
                <option value="WEB">Web</option>
            </select>
          <label for="user-group">Your Group</label>
        </div>
        <div class="file-field input-field">
            <div class="btn">
                <span>User Image</span>
                <input type="file" name='photo'>
            </div>
            <div class="file-path-wrapper">
                <input id="user-img" name="user-img" class="file-path validate" type="text">
            </div>
        </div>
        <a class="waves-effect waves-light btn" id='btnSignup'>Sign Up</a>
    </form>
  <script src='../../assets/js/app/signupBtn.js'></script>
</div>

</main>


<?php
include '../partials/footer.php';
?>