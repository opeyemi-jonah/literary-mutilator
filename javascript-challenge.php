<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>javaScript Challenge</title>
	<link rel="stylesheet" href="./style/style.css">
</head>

<body onload="request()">

<div id="divOne">
<p>
	Shields up. I recommend we transfer power to phasers and arm the photon torpedoes. Something strange on the detector
	circuit. The weapons must have disrupted our communicators. You saw something as tasty as meat, but inorganically materialized out of patterns used by our transporters. Captain, the most elementary and valuable statement in science, the beginning of wisdom, is 'I do not know.' All transporters off.
</p>
</div>

<p id="2">
	Shrimp tacos are tasty tacos! Say taco one more time. Carne asada on corn tortillas. Burritos are very tasty.
	Side of rice and beans, please. Can you put some peppers and onions on that? Josh’s taco shack is the best taco shack.
	Say taco one more time. Tacos for breakfast, lunch and dinner. Side of rice and beans, please. Tacos, tacos, tacos.
	Pico de gallo, on the side please. Fish tacos with cabbage slaw and a side of chips and guac.
</p>

<p id ='3'>
	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
	layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
	'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
	now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
	their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
</p>


<p><div id="result"></div></p>


<script>
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

	function getRandomInt(max) {
		return Math.floor(Math.random() * Math.floor(max));
	}


firstParagraph.addEventListener('click', event=> {
	let red = getRandomInt(3).toString(16)
	let green = getRandomInt(3).toString(16)
	let blue = getRandomInt(3).toString(16)
	let rgb = '#' + red + green + blue;

	console.log(event.target);
	console.log(event.type);
	firstParagraph.style.backgroundColor = rgb;
});




	function rotEncrypt() {
let pOne = document.getElementById('1');
console.log(pOne.innerText);
let i;
for (i=0; i<pOne.length;i++){


}


	}



</script>




</body>
</html>