import { createObjectCardFromArray } from "./createComponents.js";

const search = document.getElementById('search');
search.addEventListener('submit', (e)=>{
    e.preventDefault();
});
search.addEventListener('change', (e)=> {
    // e.preventDefault();
    // debugger;
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        console.log(xhr.readyState);
        if (xhr.readyState === 4){
            console.log(xhr.status);
            if (xhr.status === 200){
                console.log(xhr.responseText);
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

