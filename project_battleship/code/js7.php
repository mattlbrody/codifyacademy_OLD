// event handlers
function handleFireButton() {
  var guessInput = document.getElementById("guessInput");
  var guess = guessInput.value.toUpperCase();
  controller.processGuess(guess);
  guessInput.value = "";
}

function handleKeyPress(e) {
  var fireButton = document.getElementById("fireButton");
  // in IE9 and earlier, the event object doesn't get passed
  // to the event handler correctly, so we use window.event instead.
  e = e || window.event;
  if (e.keyCode === 13) {
    fireButton.click();
    return false;
  }
}