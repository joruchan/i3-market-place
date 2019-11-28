<?php
include '../partials/head.php';
?>

<main id="signup">
<div class="container">
<img id="logo" src="../../assets/img/Logo.png" alt="">
    <h1 id="titre">Sign Up</h1>

    <form id="sign-up" action="../dataDB/signupUsers.php" method="POST">
        <div class="input-field">
          <input id="user-name" type="text" name="user-name" class="validate">
          <label for="user-name">User Name</label>
        </div>
        <div class="input-field">
          <input id="user-email" type="email" name="user-email" class="validate">
          <label for="user-email">Email</label>
        </div>
        <div class="input-field">
          <input id="user-password" type="password" name="user-password" class="validate">
          <label for="user-password">Password</label>
        </div>
        <div class="input-field">
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
                <input type="file" id="file" name='photo'>
                <input type="hidden" name="hidden-image" value="">
            </div>
            <div class="file-path-wrapper">
                <input id="user-img" name="user-img" class="file-path validate" type="text">
            </div>
        </div>
        <div class="input-field row">
            <div class="col s12 l6">
                <div id="cropper">
                </div>
            </div>
            <div id="crop-result" class="col s12 l6">
                    <img src="">
            </div>
        </div>
        <a class="waves-effect waves-light btn" id='btnSignup'>Sign Up</a>
    </form>
  <script src='../../assets/js/app/signupBtn.js'></script>
</div>

</main>
    
    <script>
        
    </script>

<?php
include '../partials/footer.php';
?>