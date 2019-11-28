import {createObjectCard, createCategorySelect} from "./app/createComponents.js";
import {getUsers} from "./app/getData.js";

getUsers();
createCategorySelect();
createObjectCard();
console.log("toto");

$(document).ready(function(){
	$('select').formSelect();
});



        