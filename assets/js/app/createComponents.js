import {allCategories} from "./getData.js";
import { fonctionClaimDB } from "./fonctionClaim.js";

let owner = '';
let ownerPic = '';
let ownerEmail = '';
export const createCategorySelect = function(){
	for( const category of allCategories ){
		let select = `<p>
						<label>
						  <input class="no-gap" name="category" type="radio" value="${category}" />
						  <span>${category}</span>
						</label>
					  </p>`;
		$("#categoryForm").append(select);
	}
}

export const createObjectCardInit = function(){
	axios.get('../../view/dataDB/allProducts.php')
		.then((response) => response.data)
		.then((objects) => {
			createObjectCardFromArray(objects);
		})
		.then(()=>console.log('objects generated'));
	}

let allUsers = [];
let currentUserId = $("#loggedInUserId").text();
let currentUserName = "";
let currentUserEmail = "";
export const createObjectCardFromArray = function(array){
	
	axios.get('../../view/dataDB/allUsers.php')
		.then((data) => data.data)
		.then((users) => {
			allUsers = users;
		})
		.then(() => {
			for (const object of array){
				for(const user of allUsers){
					if(object.creator == user.idUser){
						owner = user.userName;
						ownerPic = user.imgProfile;
						ownerEmail = user.userEmail;
					}
					if (user.idUser == currentUserId){
						currentUserEmail = user.userEmail;
						currentUserName = user.userName;
					}
				}
				let card = `
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
								<img src="${ownerPic}" class="circle tooltipped mini-avatar" data-position="right" data-tooltip="${owner}">
								<img src="${object.productImg}">
							</div>
							<div class="card-content">
								<span class="flow-text product-name" id="${object.idProduct}">${object.productName}</span>
								<ul class="collapsible">
								<li>
								  <div class="collapsible-header"><i class="material-icons" id="add">add</i>Description</div>
								  <div class="collapsible-body"><span>${object.description}</span></div>
								</li>
								  </ul>
					`;
				if(object.claimer !== null){
					card += `<p class="btn light-blue accent-2 right">Claimed!</p>`;
				} else{
					card += `<a class="waves-effect waves-light btn pink accent-4 right btn-claim" id="btn-claim">I want it!</a>`;
				}
				card += `</div></div></div>`;
				console.log(currentUserEmail);
				$("#product-list").append(card);
				$(".collapsible").collapsible();
				$('.tooltipped').tooltip();
			}

			$('.btn-claim').on("click", function(event){
				let productName = event.target.parentElement.getElementsByClassName("product-name")[0].innerText;
				let newButton = `<p class="btn light-blue accent-2 right just-claimed">Claimed!</p>`;
				$(event.target.parentNode).append($(newButton));
				$(event.target.parentElement.getElementsByClassName("just-claimed")[0]).hide();
				
				$(event.target).fadeOut();
				setTimeout(() => {
					$(event.target.parentElement.getElementsByClassName("just-claimed")[0]).fadeIn();
					$(event.target).remove();
				}, 500);
		
				M.toast({
					html: 'You have claimed ' + productName + ' !', 
					completeCallback: function(){
		
					}
				});
				let productId = event.target.parentElement.firstElementChild.id;
				fonctionClaimDB(productId);

			})

		})
}

/**
 * TODO
 * 
 * sur la card object : mettre l'avatar de la personne en haut a gauche et tooltip dessus avec son nom
 * toast avec callback pour quand on a claim (message + refresh page)
 * area avec object of the day pris aléatoirement
 * modal a la création : button avec data-target modal id, dans le modal un bouton cancel qui fait rien (lien #) et un bouton create qui fait alors l'envoi du formulaire
 */