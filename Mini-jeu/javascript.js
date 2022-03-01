let random = Math.floor(Math.random()*100)+1;
console.log(random)

let guesses = document.querySelector('.guesses');
let lastResult = document.querySelector('.lastResult');
let lowOrHi = document.querySelector('.lowOrHi');

let guessSubmit = document.querySelector('.guessSubmit');
let guessField = document.querySelector('.guessField');

let guessCount = 1;
let resetButton;


function checkGuess() {
let utilisateur = Number(guessField.value);
if (guessCount === 1){
	guesses.textContent = 'Propositions précédentes:';
}
guesses.textContent += utilisateur + ' ';

if (utilisateur === random){
	lastResult.textContent = 'Bien Joué!';
	lastResult.style.color = 'green';
	lowOrHi.textContent = '';
	GameOver();
} else if (guessCount === 10){
	lastResult.textContent = 'Perdu';
	GameOver();
} else {
	lastResult.textContent = 'Faux';
	lastResult.style.color = 'red';
     if (utilisateur < random) {
      lowOrHi.textContent = 'Le Nombre est trop bas';
     } else if (utilisateur > random) {
      lowOrHi.textContent = 'Le Nombre est trop élevé !';
     }
}
  guessCount++;
  guessField.value = '';
  guessField.focus();
}

guessSubmit.addEventListener('click', checkGuess);

function GameOver(){
 guessField.disabled = true;
 guessSubmit.disabled = true;
 resetButton = document.createElement('button');
 resetButton.textContent = 'Start again';
 document.body.appendChild(resetButton);
 resetButton.addEventListener('click',resetGame);
}

function resetGame(){
guessCount = 1;
let resetParas = document.querySelectorAll('.resultParas p');
for (let i = 0 ; i < resetParas.length ; i++) {
  resetParas[i].textContent = '';
}

  resetButton.parentNode.removeChild(resetButton);

  guessField.disabled = false;
  guessSubmit.disabled = false;
  guessField.value = '';
  guessField.focus();

  random = Math.floor(Math.random() * 100) + 1;
}
