import {createObjectCardInit, createCategorySelect} from "./app/createComponents.js";

createObjectCardInit();
createCategorySelect();

$(document).ready(function(){
	$('select').formSelect();
});
