import {createObjectCardInit, createCategorySelect, createObjectCardFromArray} from "./app/createComponents.js";


createObjectCardInit();
createCategorySelect();

$(document).ready(function(){
	$('select').formSelect();
});


$(document).ready(function(){
    $('.sidenav').sidenav();
  });



// search Cat
const catList = $('#category-list');


catList.on('click', 'label', (e) => {
	
	let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4){
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

