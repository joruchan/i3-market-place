<?php
include '../partials/header.php';
?>

<main>
<div class="container">
    <h1>Sign Up</h1>

    <form action="#" method="POST">
        <div class="input-field">
          <input id="user-name" type="text" name="user-name" class="validate">
          <label for="user-name">User Name</label>
        </div>
        <div class="input-field">
          <input id="user-email" type="email" name="user-email" class="validate">
          <label for="user-email">Email</label>
        </div>
        <div class="input-field">
            <select id="user-group" name="user-group">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Game</option>
                <option value="2">WAD</option>
                <option value="3">Web</option>
            </select>
          <label for="user-group">Your Group</label>
        </div>
        <div class="input-field">
          <input id="user-password" type="password" name="user-password" class="validate">
          <label for="user-group">Your Group</label>
        </div>
        <div class="file-field input-field">
            <div class="btn">
                <span>Image</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input id="user-img" name="user-img" class="file-path validate" type="text">
            </div>
        </div>
    </form>

</div>

</main>


<?php
include '../partials/footer.php';
?>