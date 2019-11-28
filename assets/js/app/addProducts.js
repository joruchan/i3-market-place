const btnSignup = document.getElementById('btnProducts');

btnSignup.addEventListener('click', (e)=> {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        console.log(xhr.readyState);
        if (xhr.readyState === 4){
            console.log(xhr.status);
            if (xhr.status === 200){
                console.log(xhr.responseText);

                window.location.replace('../../view/dataDB/addLinkCatProd.php');
            }        
        }
    };
    xhr.open("POST", "../../view/dataDB/addProducts.php");
    let formulaire = new FormData(document.getElementById('create-post'));
    xhr.send(formulaire);
});    

