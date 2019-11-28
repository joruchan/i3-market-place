import {createObjectCardInit, createCategorySelect} from "./app/createComponents.js";
import {allObjects, getObjects} from "./app/getData.js";

createObjectCardInit();

createCategorySelect();

createObjectCard();

$(document).ready(function(){
	$('select').formSelect();
});
