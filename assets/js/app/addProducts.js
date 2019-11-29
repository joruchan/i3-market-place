const btnSignup = document.getElementById('btnProducts');

btnSignup.addEventListener('click', (e)=> {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4){
            if (xhr.status === 200){
                window.location.replace('../../view/dataDB/addLinkCatProd.php');
            }        
        }
    };
    xhr.open("POST", "../../view/dataDB/addProducts.php");
    let formulaire = new FormData(document.getElementById('create-post'));
    xhr.send(formulaire);
});    

