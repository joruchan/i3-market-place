import {createObjectCardInit, createCategorySelect, createObjectCardFromArray} from "./app/createComponents.js";
//import{crop} from "./app/crop.js"

createObjectCardInit();
createCategorySelect();

$(document).ready(function(){
	$('select').formSelect();
});


$(document).ready(function(){
    $('.sidenav').sidenav();
  });

//crop();

//crop();



// search Cat
const catList = $('#category-list');


catList.on('click', 'label', (e) => {
	console.log($(e.target).val());
	
	let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        console.log(xhr.readyState);
        if (xhr.readyState === 4){
            console.log(xhr.status);
            if (xhr.status === 200){
                let arrayObjs = JSON.parse(xhr.responseText);
                $('#product-list').empty();
                createObjectCardFromArray(arrayObjs);
            }        
        }
    };
	xhr.open("POST", "../../view/dataDB/searchCat.php");
    let formulaire = new FormData();
    formulaire.append('search', $(e.target).val());
    xhr.send(formulaire);
});

