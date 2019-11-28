import {createObjectCardInit, createCategorySelect} from "./app/createComponents.js";
import {allObjects, getObjects} from "./app/getData.js";

createObjectCardInit();

createCategorySelect();

$(document).ready(function(){
	$('select').formSelect();
});
