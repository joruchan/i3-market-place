import {createObjectCard, createCategorySelect} from "./app/createComponents.js";
import {getUsers} from "./app/getData.js";

getUsers();
createCategorySelect();
createObjectCard();

$(document).ready(function(){
	$('select').formSelect();
});
