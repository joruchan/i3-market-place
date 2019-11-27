<?php
include '../partials/header.php';
?>

<main class="container-main">
	<div class="row content-main">
		<div class="col s12 m3 category-block">
			<p>Categories</p>
			<div id="category-list">
				
			</div>
		</div>
		<div class="col s12 m9 objects-block">
			<p>Current Listings</p>
			<div id="product-list">
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="https://robohash.org/placeholder.png">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Card Title</span>
							<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php
include '../partials/footer.php';
?>
