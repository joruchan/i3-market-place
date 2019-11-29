import { createObjectCardFromArray } from "./createComponents.js";

const search = document.getElementById('search');
const searchF = document.getElementById('search-form');

searchF.addEventListener('submit', (e)=>{
    e.preventDefault();
});
search.addEventListener('change', (e)=> {
    // e.preventDefault();
    // debugger;
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
    xhr.open("POST", "../../view/dataDB/search.php");
    let formulaire = new FormData();
    formulaire.append('search', $('#search').val());
    xhr.send(formulaire);
});    

