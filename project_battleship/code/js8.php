// init - called when the page has completed loading
window.onload = init;

function init() {
  // Fire! button onclick handler
  var fireButton = document.getElementById("fireButton");
  fireButton.onclick = handleFireButton;
  // handle "return" key press
  var guessInput = document.getElementById("guessInput");
  guessInput.onkeypress = handleKeyPress;
  // place the ships on the game board
  model.generateShipLocations();
}