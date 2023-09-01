window.onclick = function (event) {

	'use strict';
	var element = document.getElementById('gunshot').cloneNode(),
		shotSound;
	document.body.appendChild(element);
	element.style.display = 'inline';
	element.style.left = event.clientX - (element.offsetWidth / 2) + 'px';
	element.style.top = event.clientY - (element.offsetHeight / 2) + 'px';
	
	shotSound = new Audio();
	shotSound.src = 'http://soundbible.com/mp3/9_mm_gunshot-mike-koenig-123.mp3';
	shotSound.play();
};

const myTimeout = setTimeout(myFunction, 5000);
const myTimeout2 = setTimeout(myFunction2, 5000);

function myFunction() {
    let element = document.getElementById("myDIV");
    element.classList.remove("flier");
 }
 function myFunction2() {
    let element2 = document.getElementById("myDIV2");
    element2.classList.remove("flier");
 }
 


