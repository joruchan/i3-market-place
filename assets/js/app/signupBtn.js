 
 const btnSignup = document.getElementById('btnSignup');

    btnSignup.addEventListener('click', (e)=> {
        e.preventDefault();
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = () => {
            console.log(xhr.readyState);
            if (xhr.readyState === 4){
                console.log(xhr.status);
                if (xhr.status === 200){
                    console.log('on change d\'état');
                    console.log(xhr.responseText);
                    // let arrayObjs = JSON.parse(xhr.responseText);
                    // generateDom(arrayObjs); 
                    window.location.replace('http://localhost/Hackathon/i3-market-place/view/pages/');
    
                }        
            }
        };
        xhr.open("POST", "../../view/dataDB/signupUsers.php");
        let formulaire = new FormData(document.getElementById('sign-up'));
        xhr.send(formulaire);
        console.log('bouton cliqué');
    
    });    

