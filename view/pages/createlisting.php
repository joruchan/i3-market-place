<?php
include '../partials/head.php';
include '../partials/header.php';
?>

<main>
<div class="container">
    <h1>Post an object</h1>

    <form id="create-post" action="#" method="POST">
        <div class="input-field">
          <input id="post-name" type="text" name="post-name" class="validate">
          <label for="post-name">Name</label>
        </div>

        <div class="input-field">
          <textarea id="post-desc" name="post-desc" class="materialize-textarea"></textarea>
          <label for="post-desc">Description</label>
        </div>

        <div class="input-field col s12">
            <select multiple>
                <?php
                $catArray = array("Baby items","Bags","Books","Clothes","Creative Hobbies","Electronics","Furniture","Hygiene","Jewelry","Kitchenware","Miscellaneous","Movies","Music","Pet Accessories","Services","Shoes","Sports articles","Tickets","Video Games");

                for($i=0; $i < sizeof($catArray); $i++){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $catArray[$i]; ?></option>
                <?php } ?>
                
            </select>
            <label>Categories</label>
        </div>


        <div class="file-field input-field">
            <div class="btn">
                <span>Image</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input id="post-img" name="post-img" class="file-path validate" type="text">
            </div>
        </div>
        <a class="waves-effect waves-light btn">Create</a>
    </form>

</div>

</main>


<?php
include '../partials/footer.php';
?>