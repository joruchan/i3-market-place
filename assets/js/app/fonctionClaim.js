export const fonctionClaimDB = (productId) => {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        console.log(xhr.readyState);
        if (xhr.readyState === 4){
            console.log(xhr.status);
            if (xhr.status === 200){
                console.log(xhr.responseText);
            }        
        }
    };
    xhr.open("POST", "../../view/dataDB/claimer.php");
    let formulaire = new FormData();
    formulaire.append('productId', productId);
    xhr.send(formulaire);
};