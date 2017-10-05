
var stage1  = document.getElementById('stage1');
var stage2  = document.getElementById('stage2');
var stage3  = document.getElementById('stage3');
var next    = document.getElementById('next');
var prev    = document.getElementById('prev');
var play    = document.getElementById('play');
var reset   = document.getElementById('reset');
var tplayer = document.getElementById('tplayer');
var tresult = document.getElementById('tresult');
var results = document.getElementById('results');

var options = document.getElementsByClassName('option');

var nameplayer     = null;
var optionplayer   = null;
var optioncomputer = null;
var gamearray      = new Array('rock', 'paper', 'scissor');      

var fxIn   = 'zoomInDown';
var fxOut  = 'zoomOutUp';

stage2.style.display = 'none';
stage3.style.display = 'none';
stage1.classList.add(fxIn);

for (var i = 0; i < options.length; i++) {
	options[i].onclick = function() {
		for (var j = 0; j < options.length; j++) {
			options[j].classList.remove('active');
		}
		this.classList.add('active');
		optionplayer = parseInt(this.getAttribute('data-option'));
	}
}

next.onclick = function() {
	nameplayer = document.getElementById('name').value;
	if(nameplayer.length > 0) {
		stage1.classList.remove(fxIn);
		stage1.classList.add(fxOut);
		setTimeout(function(){
			stage1.style.display = 'none';
		},1000);

		stage2.classList.remove(fxOut);
		stage2.classList.add(fxIn);
		setTimeout(function(){
			stage2.style.display = 'block';
		},1000);	
		tplayer.innerHTML = nameplayer;
	} else {
		alert('Please enter your player name!');
	}
}

prev.onclick = function() {
	stage2.classList.remove(fxIn);
	stage2.classList.add(fxOut);
	setTimeout(function(){
		stage2.style.display = 'none';
	},1000);

	stage1.classList.remove(fxOut);
	stage1.classList.add(fxIn);
	setTimeout(function(){
		stage1.style.display = 'block';
	},1000);
}

play.onclick = function() {
	if(optionplayer != null) {
		stage2.classList.remove(fxIn);
		stage2.classList.add(fxOut);
		setTimeout(function(){
			stage2.style.display = 'none';
		},1000);

		stage3.classList.remove(fxOut);
		stage3.classList.add(fxIn);
		setTimeout(function(){
			stage3.style.display = 'block';
		},1000);

		optioncomputer = parseInt(Math.floor(Math.random()*gamearray.length));

		if(optionplayer > optioncomputer) {
			if(optionplayer == 2 && optioncomputer == 0 ) {
				tresult.innerHTML = "YOU LOSE!";
			} else {
				tresult.innerHTML = "YOU WIN!";
			}
		} else {
			if(optionplayer == 0 && optioncomputer == 2 ) {
				tresult.innerHTML = "YOU WIN!";
			} else {
				tresult.innerHTML = "YOU LOSE!";
			}
		}
		if(optionplayer == optioncomputer) {
			tresult.innerHTML = "TIE!";
		}
		results.innerHTML = '<li id="'+gamearray[optionplayer]+'"></li><li id="'+gamearray[optioncomputer]+'"></li>';
		
	} else {
		alert('Please select an option!');
	}
}

reset.onclick = function() {
	window.location.reload();
}