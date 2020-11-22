var num = 0; 
var guessRemaining = 10; 
function randomNum(){
	var randomNum = Math.floor((Math.random() * 100) + 1); 
	return randomNum; 
}
function start(){
	num = randomNum(); 
	document.getElementById("on-start").innerHTML= "Start guessing numbers!";
	document.getElementById("hint").innerHTML =""; 
	document.getElementById("guesses-remaining").innerHTML= "";
	document.getElementById("guessNum").value = ""; 
}
function guessNum(){
	guessRemaining--;
	var guessNum = document.getElementById("guessNum").value; 
		if(guessNum > num){
			document.getElementById("hint").innerHTML = "Number is less than guess"; 
			
			document.getElementById("guesses-remaining").innerHTML= "Guesses Remaining: " +guessRemaining;
		}
		if(guessNum < num){
			document.getElementById("hint").innerHTML = "Number is greater than guess"; 
			
			document.getElementById("guesses-remaining").innerHTML= "Guesses Remaining: " +guessRemaining;
		}
		if(guessNum == num){
			document.getElementById("hint").innerHTML = "Congrats you've guessed right, press start to play again";
			
		}
		if(guessRemaining == 0){
			document.getElementById("hint").innerHTML = "You dont have any more gueses, press start to play again";
		}
		
}