
//getting data from JSON placeholder and posting

function request(){
	fetch('https://jsonplaceholder.typicode.com/todos/1')
		.then(function(response) {

			return response.json()
		})

		.then((response)=> {

			console.log(response);
			let result = document.getElementById("result");
			result.innerHTML += "userId: "+response.userId+"<br>"+"id: "+response.id+"<br>"+"title: "+response.title+"<br>"+
				"completed: "+response.completed;

		});


}

let firstParagraph = document.getElementById("divOne");

let secondParagraph = document.getElementById("2");
let thirdParagraph = document.getElementById("3");


//generate random numbers for my color codes
function getRandomInt(max) {
	return Math.floor(Math.random() * Math.floor(max));
}

//Change color event listener with a mouseover event

firstParagraph.addEventListener('mouseover', event=> {
	/* A deep-dive coders inspiration
	Assigned random numbers to variables */
	let red = getRandomInt(10)
	let green = getRandomInt(10)
	let blue = getRandomInt(10)
	let rgb = '#' + red + green + blue;

	console.log(event.target);
	console.log(event.type);
	firstParagraph.style.backgroundColor = rgb;
});

//change font style using a CLICK event
secondParagraph.addEventListener('click', event=>{
	secondParagraph.style.fontFamily = "\"Comic Sans MS\", cursive, sans-serif"


});


//ROT13 function
function rot(str){
	let solve = "";

	for (let i=0;i<str.length;i++){

		let asciiNum = str[i].charCodeAt();
		//ascii code for uppercase and lowercase A-M
		if (asciiNum >=65 && asciiNum <=77 || asciiNum >=97 && asciiNum <= 109){
			solve += String.fromCharCode(asciiNum + 13)
		}

		//ascii code for uppercase N-Z and lowercase n-z
		else if(asciiNum >=78 && asciiNum <=90 || asciiNum >=110 && asciiNum <= 122) {

			solve += String.fromCharCode(asciiNum - 13)
		}

		//append those not within range as is to str
		else {
			solve += str[i];
		}

	}
	return solve;
}

//ROT13 using a CLICK EVENT
thirdParagraph.addEventListener('click', e=>{

	thirdParagraph.innerHTML = thirdParagraph.innerHTML.split("").map(rot).join("");
	return thirdParagraph.innerHTML;


});

//find and replace function USING A CLICK EVENT

secondParagraph.addEventListener('click', e=>{

	let look = secondParagraph.innerHTML;

	//regular expression to search globally for "breakfast"
	let change = look.replace(/breakfast/g, "dinner of life");

	//replacing the look variable with variable change as the new html content
	secondParagraph.innerHTML = change;

});


//KEYBOARD REACTION
let keyReact = document.getElementById("input");
keyReact.addEventListener('keypress', e=>{

	console.log(e.type);


});

//shuffle
thirdParagraph.addEventListener("click",e=>{



})