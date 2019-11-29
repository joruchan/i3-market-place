import {createObjectCardInit, createCategorySelect} from "./app/createComponents.js";
import{crop} from "./app/crop.js"

createObjectCardInit();
createCategorySelect();

$(document).ready(function(){
	$('select').formSelect();
});

crop();