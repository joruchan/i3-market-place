const btnSignup = document.getElementById('btnSignIn');

btnSignup.addEventListener('click', (e)=> {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        console.log(xhr.readyState);
        if (xhr.readyState === 4){
            console.log(xhr.status);
            if (xhr.status === 200){
                console.log(xhr.responseText);
                // let arrayObjs = JSON.parse(xhr.responseText);
                // tafonction(arrayObjs); 
            }        
        }
    };
    xhr.open("POST", "../../view/dataDB/signIn.php");
    let formulaire = new FormData(document.getElementById('login'));
    xhr.send(formulaire);
});    

