import {allObjects, allUsers, allCategories} from "./getData.js";

let owner = '';
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
export const createObjectCard = function(){
	axios.get('../../config/testjsons/objects.json')
		.then((data) => data.data)
		.then((objects) => {
			for (const object of objects){
				for(const user of allUsers){
					if(object.creator == user.idUser){
						owner = user.userName;
					}
				}
				let card = `
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image">
							<img class="materialboxed" src="${object.productImg}">
							</div>
							<div class="card-content">
								<span class="flow-text">${object.productName}</span>
								<ul class="collapsible">
								<li>
								  <div class="collapsible-header"><i class="material-icons" id="add">add</i>Description</div>
								  <div class="collapsible-body"><span>${object.description}</span></div>
								</li>
							  	</ul>
								<p></p>
								<p>Added by : ${owner}</p>
					`;
				if(object.claimer !== null){
					card += `<p class="btn light-blue accent-2 right">Claimed!</p>`;
				} else{
					card += `<a class="waves-effect waves-light btn pink accent-4 right" id="btn-claim">I want it!</a>`;
				}
				card += `</div></div></div>`;
				$("#product-list").append(card);
				$(".collapsible").collapsible();
				$('.materialboxed').materialbox();
			}
		});
}

/**
 * TODO
 * 
 * sur la card object : mettre l'avatar de la personne en haut a gauche et tooltip dessus avec son nom
 * toast avec callback pour quand on a claim (message + refresh page)
 * area avec object of the day pris aléatoirement
 * modal a la création : button avec data-target modal id, dans le modal un bouton cancel qui fait rien (lien #) et un bouton create qui fait alors l'envoi du formulaire
 */