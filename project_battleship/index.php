<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Codify Academy - Battleship - Made with Javascript</title>
        <meta name="description" content="Simple Javascript Calculator">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    </head>
    <body>

        <section id="introduction">
            <div class="container">
                <h1 class="text-center">Codify Academy's Battleship Game made with JavaScript <i class="fa fa-gamepad"></i></h1>
                <p class="lead text-center">Lets take a look at the step by step process on how to complete this basic JavaScript Game.</p>
                <h4 class="text-success text-center">Here is a break down of what we need to do from start to finish - before we do any coding.</h4>
                <div class="steps">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="bg-success">
                            <ol style="padding:5px 25px; margin-top:25%;">
                                <h3 class="text-center">HTML Structure</h3>
                                <li>Message Area - to display "Hit", "Miss", "You Sunk My Battleship"</li>
                                <li>A place to allow user input & a fire button</li>
                                <li>Table with 7 rows - the grid will be 7x7</li>
                                <li>7 spots within each row - place for the ships</li>
                            </ol>    
                        </div>      
                        <div class="bg-info">      
                            <ol style="padding:5px 25px;">
                                <h3 class="text-center">CSS Style Requirements</h3>
                                <li>Background for the body</li>
                                <li>Background image for the battleship board</li>
                                <li>Classes to display a "Hit" or "Miss"</li>
                                <li>Style for Input & Fire button</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-danger">
                            <ol style="padding:5px 25px;">
                                <h3 class="text-center">JavaScript Requirements</h3>
                                <li>Create a object for the model, view & controller.</li>
                                <li>Within the model object define the board size, number of ships, ship length & number of ships sunk</li>
                                <li>Ships array for the total number of ships used in the game.</li>
                                <li>Fire method in the model object to check if a user hit, missed, or fired off the board</li>
                                <li>Sunk method to sink a ship within the ships array</li>
                                <li>Method to generate ship locations</li>
                                <li>Method to generate the ships</li>
                                <li>Method to stop collisions from happening when placing the ships</li>
                                <li>Withing the view object - 3 methods to display a message to the user, to display a hit on the board, and to display a miss on the board</li>
                                <li>Within the controller object, track the number of user guesses, as well a method to display the total number of guesses when a user sinks all the battleships</li>
                                <li>Function to parse the user guess from A0 to 00 ect. to match the table we built & check that it is a valid location on the board</li>
                                <li>Function to handle the user clicking the fire button</li>
                                <li>Function to handle the user clicking the fire button if using IE9 or earlier</li>
                                <li>Function to initialize the above 2 functions as well as generating ships locations</li>
                                <li>A window.onload command to start the initializer function so the game gets created</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="text-center">Here is what you should be aiming for</h3>
            <img src="img/bs.jpg" style="margin:0 auto 10px; display:block;">
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-danger text-center" style="width:100%;padding:0 -15px 0;margin:0;"><div class="fa fa-child fa-2x"></div> Once this is all complete, you'll have built a working Battleship Game<div class="fa fa-child fa-2x"></div></div>
                </div>
            </div>
        </section>

        <section id="html">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <h1>Step 1: HTML</h1>
                    <h2>Now you can begin the coding fun!</h2>
                    <p class="lead">Lets re-look at what you need for HTML</p>
                    <p>You will need to create the following:</p>
                    <ol class="bg-success" style="padding:5px 25px;">
                        <li>Message Area - to display "Hit", "Miss", "You Sunk My Battleship"</li>
                        <li>A place to allow user input & a fire button</li>
                        <li>Table with 7 rows - the grid will be 7x7</li>
                        <li>7 spots within each row - place for the ships</li>
                    </ol>
                    <p>Begin inside your body tag, create a <code>div</code> and set the <code>id</code> to board - this will serve as your wrapper for styling.</p>
                    <!-- html step 1 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html1.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <p>Inside this div we need one <code>h1</code> tag, to display messages to the user, set the <code>id</code> to messageArea.</p>
                    <!-- html step 2 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html2.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <p>Next lets handle the user input & fire button, start by creating a <code>form</code> & within that form, add a <code>div</code>, and give it the Bootstrap class of input-group. - This will align the user input & fire button on one line.</p>
                    <p>Now add two <code>input</code> tags, to the 1st add a type of text, add an <code>id</code> of guessInput, give it a placeholder of "A0", a Bootstrap class of form-control, and finally a autofocus, so it will be focused on load the page!</p>
                    <P>For the second <code>input</code> set the type to button, give it an <code>id</code> of fireButton, set the value of "Fire!", and add style to the button using 2 Bootstrap classes btn & btn-danger.</p>
                    <!-- html step 3 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html3.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <p>Finally you are up to the table for the board, start with a <code>table</code>, within this table we need 7 table rows.</p>
                    <P>Within each <code>tr</code> we need to make 7 <code>td</code> tags. We will use numbers to represent each potential position - A0 will be 00 to us and A0 to the user. Add id's to each <code>td</code>, the first should be 00, the second 01, the third 02 and so on</P>
                    <p>A = 0 || B = 1 || C = 2 || D = 3 || E = 4 || F = 5 || G = 6</p>
                    <!-- html step 4 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html4.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-success text-center" style="width:100%;padding:0 -15px 0;margin:0;"><div class="fa fa-child fa-2x"></div> Excellent!!! HTML Complete <div class="fa fa-child fa-2x"></div></div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>


        <section id="css">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <h1>Step 2: CSS</h1>
                    <h2>Time for a little styling - Now all those class & id attributes will come in handy</h2>
                    <p class="lead">You will need to create styling for the following:</p>
                    <ol class="bg-info" style="padding:5px 25px;">
                        <li>Background for the body - <span class="text-danger">used to make the background black</span></li>
                        <li>Background image for the battleship board - <span class="text-danger">used to set the background image</span></li>
                        <li>Classes to display a "Hit" or "Miss" - <span class="text-danger">used to add images of a hit ship or a miss according to the user input</span></li>
                        <li>Style for Input & Fire button - <span class="text-danger">used to accept user input & a fire button</span></li>
                        
                    </ol>
                    <br>
                    <p>Start by setting the <code>body</code> background color to black.  Next style your <code>#board</code> selector, set the <code>position</code> to relative, the <code>width</code> to 1024px, the <code>height</code> to 863px, the <code>margin</code> to auto & the <code>background</code> to url("../img/board.jpg") no-repeat.</p>
                    <!-- css step 1 -->
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css1.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 2 -->
                    <p>Now that you styled your <code>#board</code>, you can make a new selector choosing your <code>h1</code> that has a id of messageArea - set the <code>position</code> to absolute, the <code>top</code> to have a value of 0, the <code>left</code> to have a position of 0 & the <code>color</code> should be set to the rgb value of (83, 175, 19), a nice light green.</p>                
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css2.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 3 -->
                    <p>Time to style the table, start a new CSS selector and set it to find your <code>table</code> tag - first set the <code>position</code> to absolute, the <code>left</code> property to 173px, the <code>top</code> to 98px, and the <code>border-spacing</code> to 0.</p>  
                    <p>Start a new selector and target every <code>tr</code> tag and set the <code>height</code> to 97px.  Last selector for this step, choose every <code>td</code> tag adjust the <code>width</code> to be 96px & the <code>height</code> set to 94px.</p>             
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css3.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 4 -->
                    <p>Now we can style the form which takes user input & allows the user to fire.  Start with the <code>form</code> selector, we need to set the <code>position</code> to absolute, the <code>top</code> needs a value of 25px, the <code>right</code> should be 0, add a <code>padding</code> of 10px all around, the <code>background-color</code> should be a rgb value of (83, 175, 19), and last the z-index so the table is laid on top of the board background image, set the <code>z-index</code> property to 100.</p>
                    <p>Thats it for the <code>form</code> selector, using the descendant selector call an <code>input</code> tags that are found in any <code>form</code> tags. Add a <code>background-color</code> with a rgb value of (152, 207, 113), and give it a <code>border-color</code> again using a rgb value of (83, 175, 19). Lastly add a <code>font-size</code> property, and set the value to 1em.</p> 
                    <p>The final selector will be targeting the class of <code>form-control</code>, give it a <code>width</code> of 70% !important & a <code>margin-right</code> of 5%.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css4.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 5 -->
                    <p>The final two selectors will be targeting a class of <code>hit</code> & and a class <code>miss</code>, each will attach a background image to a <code>td</code> cell based on if a user hit or missed the computers battleships.  Begin with the <code>.hit</code> selector and set the <code>background</code> to url(../img/ship.png) no-repeat center center, end with the <code>.miss</code> selector and set the <code>background</code> to url(../img/miss.png) no-repeat center center</p>               
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css5.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>                    
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-info text-center" style="width:100%;padding:0 -15px 0;margin:0;"><div class="fa fa-child fa-2x"></div> Well Done!!! CSS Complete <div class="fa fa-child fa-2x"></div></div>
                </div>
            </div>
        </section>

        <section id="js">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <h1>Step 3: Javascript</h1>
                    <h2>Time to make your calculator actually calculate inputs!</h2>
                    <p class="lead">Lets revisit what your Javascript needs are for your calculator</p>
                    <ol class="bg-danger" style="padding:5px 25px;">
                        <li>Create a object for the model, view & controller.</li>
                        <li>Within the model object define the board size, number of ships, ship length & number of ships sunk</li>
                        <li>Ships array for the total number of ships used in the game.</li>
                        <li>Fire method in the model object to check if a user hit, missed, or fired off the board</li>
                        <li>Sunk method to sink a ship within the ships array</li>
                        <li>Method to generate ship locations</li>
                        <li>Method to generate the ships</li>
                        <li>Method to stop collisions from happening when placing the ships</li>
                        <li>Withing the view object - 3 methods to display a message to the user, to display a hit on the board, and to display a miss on the board</li>
                        <li>Within the controller object, track the number of user guesses, as well a method to display the total number of guesses when a user sinks all the battleships</li>
                        <li>Function to parse the user guess from A0 to 00 ect. to match the table we built & check that it is a valid location on the board</li>
                        <li>Function to handle the user clicking the fire button</li>
                        <li>Function to handle the user clicking the fire button if using IE9 or earlier</li>
                        <li>Function to initialize the above 2 functions as well as generating ships locations</li>
                        <li>A window.onload command to start the initializer function so the game gets created</li>
                    </ol>
                    <br>                
                    <!-- js step 1 -->
                    <p>Lets begin the JavaScript by creating our view object. This will be used to make a method to display messages to the user based on their input & we will make two other methods to deal with adding a class to the user input location.</p>                 
                    <p>Add a <code>displayMessage</code> method and set it to a function with a parameter of msg. In the function create a variable called messageArea and target the <code>messageArea</code> id in the HTML, using <code>document</code> <code>.getElemetById</code>. Then call the variable we just made and change the <code>.innerHTML</code> to equal the msg parameter.</p>
                    <p>Make a new method called <code>displayHit</code> again setting it to a function, pass a parameter of <code>location</code>. Add a variable called <code>cell</code>, use it to find the <code>document</code> <code>.getElementById</code> and find the location, this will be converted from to number form before the user guess gets this far - so we can find an individual <code>td</code> id. Call the var we just made and using <code>.setAttribute</code> add the "class" of "hit" to the cell.</p>
                    <p>The last method call it <code>displayMiss</code> once again setting it to a function, pass a parameter of <code>location</code> again. Then create a variable called <code>cell</code>, use it to find the <code>document</code> <code>.getElementById</code> and find the location. Call the var we just made and using <code>.setAttribute</code> add the "class" of "miss" to the cell. - these will assign either of the two images based on if a user hits a ship or misses a ship.</p>
                    <p>You can see it in action by adding a class of <code>hit</code> or a class of <code>miss</code> to any <code>td</code> cell and you will see the image show up in the cell!</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js4.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 2 -->
                    <p>Moving back to the our model object. Within this object create a few properties, start with <code>boardSize</code> set the property value to 7. the <code>numShips</code> will be 3, each <code>shipLength</code> will be 3, and naturally at the start the <code>shipsSunk</code>property should be 0.</p> 
                    <P>The final two properties will track each ship location & if it was hit or not. First is a <code>locations</code> property - the property value will be an empty array to store where the ships will be when the game starts - we will update this when a ship is struck, as well as a <code>hits</code> property - also an empty array this time of stings - so we can store if a ships location was hit yet or not.</p>       
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js1.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 3 -->
                    <p>Time to add some methods to the model object, start by creating two both set to functions. The first a <code>fire</code> method, pass the parameter of guess through the function. The second call <code>isSunk</code> and pass a parameter of ship through this one.</p>                 
                    <p>The fire method will tell the user not only if they hit or missed or sunk a ship, but will also track it in the ships method.</p>
                    <p>Start with a for loop to see if the <strong>i</strong> is less than <code>this.numShips</code>. Add a new variable inside call it <code>ship</code> and have it equal <code>this.ships[i]</code>. Add one last variable called <code>index</code> have it equal to the <code>ship</code> var find all the <code>locations</code> and the the <code>indexOf</code> of the guess parameter.</p>
                    <p>Next lets make a <code>if</code> statement to check if the ship index has already been hit so we can alert the player. If so we want to call the <code>view</code> method and the <code>displayMessage</code> have it say "Oops, you already hit that location" and then return this to be true.</p>
                    <p>Add an <code>else if</code> to the above if statement, have this conditional check to see if the <code>index</code> variable is greater or equal to 0. If it is we want to update the <code>ship</code> method and change the <code>hits[index]</code> property to equal "hit". Next call the <code>view</code> object and call the <code>displayHit</code> method and pass the <code>guess</code> parameter into it. Finally call the <code>view</code> method and update the <code>displayMessage</code> property to "Hit!".</p>
                    <p>Within this <code>else if</code> add another <code>if statement</code> to check the conditional of <code>this</code> .isSunk(ship) - a method we will create in a minute, but just know we are checking if the ship that was just hit is sunk and if so we need to tell the user using the <code>view</code> object and calling the <code>displayMessage</code>, have this say something like "You sank my battleship!". Also update <code>this</code> <code>.shipSunk++</code> so the browser knows you sunk one of the ships. After this <code>if</code> statement we need to return true.</p>
                    <p>Before we leave this <code>for</code> loop lets make the input get auto focused on, so the user doesn't need to click it every time they want to make a guess. Use a quick jQuery line <code>$('#guessInput').focus();</code>. On the outside of the for loop will be run if the user misses, so we need to update the <code>view</code> object. Call the <code>displayMiss</code> method with the parameter of guess. Once again call the <code>view</code> method and update the <code>displayMessage</code> to say something like "You Missed", and return this false.</p>
                    <p>Whoo...that was a lot...time to move into the isSunk and create a <code>for</code> loop and lets have it check to see if the <strong>i</strong> is less than <code>this.shipLength</code>. Within it create a <code>if</code> statement and have the conditional to see if the <code>ship.hits[i]</code> is not equal to the string of "hit", set this if statement to return false.</p>
                    <p>Before we leave this lets make the input get auto focused on, so the user doesn't need to click it every time they want to make a guess. Use a quick jQuery line <code>$('#guessInput').focus();</code> and return this method to be true.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js2.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 4 -->
                    <p>We still need three more methods within the <code>model</code> object <strong>Each will be set to a function</strong>. The first call <code>generateShipLocations</code>, we will use this to define the ships locations, the second call <code>generateShip</code> these will create the actual ships, and the third call it <code>collision</code> and pass the parameter of <code>locations</code>, we will use this to stop any ships from colliding.</p>
                    <p>Inside the 1st method we just made, create a variable called <code>locations</code>, dont set a value to it.  Next run a <code>for</code> loop to check if the <strong>i</strong> is less than <code>this.numShips</code>, and if so add a <code>do</code> and have this call the variable we just made and have it equal to <code>this.generateShip()</code>. Add a while statement that checks for <code>this</code> <code>.collusion</code> with a parameter of locations, we will define what happens here in a minute. Within the while statement find it find <code>this.ships[i].locations</code> and set it equal to the locations variable. Once we have the <code>generateShip</code> function built, we can generate some ships.</p>
                    <p>Inside the generateShip method we go, create a variable called <code>direction</code>, have this equal to the <code>Math</code> function and call the <code>floor</code> js function, have the floor function check for <code>(Math.random() * 2)</code>. We need three more variables now, the first two call <code>row</code> & <code>col</code> don't give either a value, we will use these to place the ships onto the grid, and the last call NewShipLocations and have this equal a empty array.</p>
                    <p>Create a <code>if else</code> statement, and have it check to see if the <code>direction</code> variable is exactly equal to <code>1</code>. If this is true lets set this to make a ship horizontal, start by calling the <code>row</code> variable, and set it equal to the function<code>Math.floor()</code>, have it run <code>Math.random() * this.boardSize</code>, to give us a number between 0 & 6 - oddly familiar to the amount of rows on the grid...set the <code>col</code> variable now to equal the exact same this as the row, but this time subtract <code>this.shipLength</code> and add 1. For the <code>else</code> code block, we simply need to reverse the values of the variables.</p>   
                    <p>Now we just need a <code>for</code> loop to check if the index is less than <code>this.shipLength</code>. Inside we need another <code>if else</code> statement, again to check it the <code>direction</code> is exactly equal to <code>1</code>. If it is use the <code>push()</code> function to push the row + "" + (col + i) to the <code>newShipLocations</code> variable. Otherwise <code>push()</code> the (row + i) + "" + col). And return newShipLocations, so it stores in the array to be placed very shortly!!!</p>
                    <p>And Finally we can <code>return</code> the <strong>newShipLocations</strong> variable to place the ship!</p> 
                    <p>Finally into the last method for this object we go...<strong>Stopping a Collision!</strong> create a <code>for</code> loop to see if the <strong>i</strong> is less than <code>this.numShips</code>. Inside create a new variable and call it <code>ship</code> have it equal to the index of <code>this.ships</code>. Next create another <code>for</code> loop inside the for loop we just made, have it check to see if a <strong>j</strong> variable is less than <code>locations.length</code>. Inside this loop, create a <code>if</code> statement is see if <code>ship.locations.indexOf(locations[j])</code> is greater than or equal to 0, if so return this true. Outside the <code>for</code> loop we need to return this false so we know there have been no collisions.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js3.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 5 -->
                    <p>Time to put the <code>controller</code> object together, add a property of <code>guesses</code> and have this equal to <strong>0</strong>. This will track the amount of user guesses. We just need one method in this object, call it <code>processGuess</code> and set it to a function with a parameter of <code>guess</code>. Create a variable called <code>location</code> and have it equal to the <code>parseGuess(guess)</code> function.</p>
                    <p>Create a <code>if</code> statement with a conditional of <code>location</code>, inside increment <code>this.guesses</code> so we can track how many guesses the user takes to beat the game. Add a variable, call it <code>hit</code> have this equal to the model object, get the <code>fire</code> method and pass the location parameter. We just need 1 more <code>if</code> statement below the last variable, we need to check if the <code>hit</code> var & model.shipSunk method is equal to <code>model.numShips</code>, if this passes it means all the ships will be sunk, so tell the user using the <code>view.displayMessage</code> and have it say something like <strong>"You sank all my battleships, in " + this.guesses + " guesses"</strong>.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js5.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 6 -->
                    <p>Lets get into how we will parse the users guess to convert them to a number that will associate to a <code>td</code> cell.</p>
                    <p>Start with a new function and give it a name of <code>pareGuess</code>, and pass the parameter of <code>guess</code> through the new function. Now we need a variable, call it <code>alphabet</code> have this equal an array of strings for the letters "A" - "G". Next we need to check to make sure a input is valid, add a <code>if else</code> statement, to check to see if the <code>guess</code> parameter is exactly equal to <code>null</code> <strong>OR</strong> the <code>guess.length</code> is not a equal value to 2. If either of these are true - the users input is wrong, so <code>alert</code> the user to something like "Oops, please enter a letter and number on the board."</p>
                    <p>Now we can work on the else - or a valid input - First we need to create a few variable - the first will be called <code>firstChar</code> have this set to equal the <code>guess</code> parameter, and find the <code>charAt(0)</code>, this will find the first character of the user input. The next variable call it <code>row</code> set this to equal the <code>alphabet</code> and find the <code>indexOf</code> the lastChar variable.  The last variable we need call it <code>column</code> have this equal to the <code>guess</code> parameter and find the <code>charAt(1)</code> this will find the second character in the user input.</p>
                    <p>Now that we have the variables we need, lets put them to use - create a <code>if else if else</code> statement. The first thing conditional we will check will check to make sure either <code>row</code> <strong>OR</strong> <code>column</code> are not numbers, using the <code>isNaN</code> JavaScript function. If this conditional is meet we need to alert the user to tel them something like <strong>"Oops, that isn't on the board."</strong>. We will use the <code>else if</code> to make sure the user selects a spot on the board for their guess. If row is less than 0 <strong>OR</strong> our row is greater than or equal to the boardSize property of the model object, and then same goes for the <code>column</code> variable. If so <code>alert</code> the user to "Oops, that's off the board!" Our else will just return the column + row, and finally return this <code>null</code> and your user guess will now get parsed to a number value!!!</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js6.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                     <!-- js step 7 -->
                    <p>Now that we have all the Objects we need built we can create two new functions to handle when a user presses the fire button, or presses return on a IE9 or earlier browser. Start by creating two new functions, the first call <code>handleFireButton</code> with no parameter, and the second call <code>handleKeyPress</code> and pass the e (event) parameter.</p>
                    <p>Inside the first function create a new variable and call it <code>guessInput</code> set this to find the document and use the <code>getElementById</code> to find the <code>guessInput</code> id. Create one more variable called <code>guess</code> and have it equal the variable we just made using the <code>.value</code> function set the values to be transformed to uppercase using the <code>toUpperCase()</code> function.</p>
                    <p>Next call the <code>controller</code> object, and then the <code>processGuess</code> method with the parameter of <code>guess</code>. Last change the <code>guessInput</code> value to be an empty string.</p>
                    <p>Move into the <code>handleKeyPress</code> function, within create a new variable called <code>fireButton</code> using the document get the element by id called <code>fireButton</code>. Next call e=e || window.event</code> which is a standard way of saying "if the parameter was not passed, default it to whatever's after the ||", in this case <code>window.event</code>. Add a <code>if</code> statement have the condition check to see if the event parameter <code>.keyCode</code> is exactly equal to 13 (the return key for IE). If so call the <code>fireButton</code> variable and add the <code>.click()</code> function, and then return it false.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js7.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                     <!-- js step 8 -->
                    <p>Now that we have all the objects & functions for the game setup created, lets finish up by initializing the program when the browser finishes loading. to start create a function and cal it <code>init</code>, no need to pass any parameters here! Inside the function create a new variable and call it <code>fireButton</code> we need to set this to get the <code>fireButton</code> id that we created in the HTML. Below call the variable we just made and add the <code>onclick</code> function, set this equal to the <code>handleFireButton</code> function we created earlier.</p>                
                    <p>Since we have the function to handle IE9 and earlier, we need to use it here. Start with a new variable and call it <code>guessInput</code>, we need to find the id of <code>guessInput</code> using the document.getElementById function built into JavaScript. Last call the var we just made, and add a <code>.onkeypress</code> and set it equal to the <code>handleKeyPress</code> function. Since IE9 and before doesn't accept the onclick we make up for it here.</p>
                    <p>FInally call the <code>model</code> object and add the <code>generateShipLocations()</code> method, so we can generate some ships!!! Above the <code>init</code> function, we can initialize it using the <code>window.onload</code> function built into JavaScript and set it equal to the <code>init</code> function.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js8.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- finish section -->
        <section id="finish">
            <div class="text-center bg_img">
                <h3><a href="http://codepen.io/CodifyAcademy/pen/ByBEOz" target="_blank">Check Out This Working Demo</a></h3>
                <img src="img/gj.jpg" class="img-responsive img-rounded" style=" height: 400px; border: 5px solid black; margin: 0 auto;  display:block;" alt="Woot">
            </div>
            <div class="text-center alert alert-danger" style="position:absolute; bottom:0; width:100%;"><i class="fa fa-child fa-2x"></i> WooHoo!!! You've Finished <i class="fa fa-child fa-2x"></i></div>
        </section>        
        <!-- JavaScripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>        
    </body>
</html>
