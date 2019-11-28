import {createObjectCard, createCategorySelect} from "./app/createComponents.js";
import {getUsers} from "./app/getData.js";

getUsers();
createCategorySelect();
createObjectCard();
console.log("toto");

$(document).ready(function(){
	$('select').formSelect();
});





// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('select');
//     var instances = M.FormSelect.init(elems, options);
//   });

// //   // Or with jQuery

//   $(document).ready(function(){
//     $('select').formSelect();
//   });
        