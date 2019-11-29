import {createObjectCardInit, createCategorySelect} from "./app/createComponents.js";


createObjectCardInit();
createCategorySelect();
alert("<?php echo 'COUCOU' . $_SESSION['id'] ?>");
$(document).ready(function(){
	$('select').formSelect();
});

