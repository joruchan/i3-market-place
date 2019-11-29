<?php

session_start();
if ($_SESSION['log'] != true){
	header("location: ../pages/accueil.php");
}


include '../partials/head.php';
include '../partials/header.php';
?>

<main class="container-main">
	<div class="row content-main">
		<div class="col s12 m3 category-block z-depth-1">
			<p>Search by Category</p>
			<div id="category-list">
				<form action="#" id="categoryForm">
    
  				</form>
			</div>
		</div>
		<div class="col s12 m8 objects-block z-depth-1">
			<p>Current Listings</p>
			<div id="product-list">
				
			</div>
		</div>
	</div>
</main>


<?php
include '../partials/footer.php';
?>
