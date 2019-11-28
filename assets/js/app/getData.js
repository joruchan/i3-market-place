
export let allObjects = [];

export const getObjects = function (){
	axios.get('../../config/testjsons/objects.json')
		.then((data) => data.data)
		.then((objects) => {
			allObjects = objects;
		});
}

// export const getUsers = function(){
// 	axios.get('../../view/dataDB/allUsers.php')
// 		.then((data) => data.data)
// 		.then((users) => {
// 			allUsers = users;
// 		});
// 	}



// TEMPORARY CATEGORY ITEM FOR MOCKUP
export let allCategories = ["Baby items","Bags","Books","Clothes","Creative Hobbies","Electronics","Furniture","Hygiene","Jewelry","Kitchenware","Miscellaneous","Movies","Music","Pet Accessories","Services","Shoes","Sports articles","Tickets","Video Games"];
