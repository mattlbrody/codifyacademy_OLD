// JavaScript Model
var model = {
  boardSize: 7,
  numShips: 3,
  shipLength: 3,
  shipsSunk: 0,

  ships: [
    { locations: [], hits: ["", "", ""] },
    { locations: [], hits: ["", "", ""] },
    { locations: [], hits: ["", "", ""] }
  ],
  
  fire: function(guess) {
    for(var i = 0; i < this.numShips; i++) {
      var ship = this.ships[i];
      var index = ship.locations.indexOf(guess);

      // check if a ship location has already been hit
      if ( ship.hits[index] === "hit" ) {
        view.displayMessage("Oops, you already hit that location");
        return true;
      } else if ( index >= 0 ) {
        ship.hits[index] = "hit";
        view.displayHit(guess);
        view.displayMessage("HIT!");

        if ( this.isSunk(ship) ) {
          view.displayMessage("You sank my battleship!");
          this.shipsSunk++;
        }
        return true;
      }
	  $('#guessInput').focus();
    }
    view.displayMiss(guess);
    view.displayMessage("You Missed");
    return false;
  },

  isSunk: function(ship) {
    for (var i = 0; i < this.shipLength; i++) {
      if (ship.hits[i] !== "hit") {
        return false;
      }
    }
    $('#guessInput').focus();
    return true;
  }
};