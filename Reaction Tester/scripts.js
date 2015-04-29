var clickedTime; var createdTime; var reactionTime;

	function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

	function makebox(){
	// Returns a random number between 0 (inclusive) and 1 (exclusive)
	var time =Math.random() * 5000;
	setTimeout(function() {
	var top=Math.random();
	top=top*300;
	var left=Math.random();
	left=left*500;
	if(time <2500){
	document.getElementById("square").style.backgroundColor=getRandomColor();
	document.getElementById("square").style.top=top+"px";
	document.getElementById("square").style.left=left+"px";
    document.getElementById("square").style.display="block";
	}else{
	document.getElementById("circle").style.backgroundColor=getRandomColor();
	document.getElementById("circle").style.top=top+"px";
	document.getElementById("circle").style.left=left+"px";
	document.getElementById("circle").style.display="block";
	}
	createdTime =Date.now();
	}, time);
	}

	document.getElementById("square").onclick = function() {
	clickedTime =Date.now();
	reactionTime =(clickedTime - createdTime)/1000;
	document.getElementById("time").innerHTML =reactionTime;
	this.style.display ="none";
	makebox();
	}
	document.getElementById("circle").onclick = function() {
	clickedTime =Date.now();
	reactionTime =(clickedTime - createdTime)/1000;
	document.getElementById("time").innerHTML =reactionTime;
	this.style.display ="none";
	makebox();
	}
	
	makebox();
	