<?php

session_start();
if ($_SESSION['log'] != true){
	header("location: ../pages/accueil.php");
}

include '../partials/head.php';
include '../partials/header.php';
?>

<main class="container-main">
	<div class="hidden-id" id="loggedInUserId"><?php echo $_SESSION['id']; ?></div>
	<div class="row content-main">
		<div class="col s12 m3 category-block z-depth-1">
			<h4>Categories</h4>
			<div id="category-list">
				<form action="#" id="categoryForm">
    
  				</form>
			</div>
		</div>
		<div class="col s12 m8 objects-block z-depth-1">
			<h4 class="objectListTitle">Current Items</h4>
			<div id="product-list">
				
			</div>
		</div>
	</div>
</main>


<?php
include '../partials/footer.php';
?>
