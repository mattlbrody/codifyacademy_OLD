<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Codify Academy - Calculator made with simple Javascript</title>
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
                <h1 class="text-center">Codify Academy's Simple Digital Javascript Calculator <i class="fa fa-calculator fa-flip-horizontal"></i></h1>
                <p class="lead text-center">Over the next few minutes, We will take you through a step by step process on how to complete this basic Javascript Calculator.</p>
                <p class="text-success text-center">Here is a break down of what we need to do from start to finish - before we do any coding.</p>
                <div class="steps">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="bg-success">
                            <ol style="padding:5px 25px;">
                                <h3>HTML Structure Requirements</h3>
                                <li>Numerators 0 to 9</li>
                                <li>Operators + || - || x || ÷</li>
                                <li>Clear button</li>
                                <li>Equal evaluator</li>
                                <li>Decimal point operator</li>
                                <li>Display for output</li>
                            </ol>    
                        </div>      
                        <div class="bg-info">      
                            <ol style="padding:5px 25px;">
                                <h3>CSS Style Requirements</h3>
                                <li>Calculator background</li>
                                <li>Clear button</li>
                                <li>Output display</li>
                                <li>Numerator buttons</li>
                                <li>Operator buttons</li>
                                <li>Equal operator</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-danger">
                            <ol style="padding:5px 25px; margin-top:10%;">
                                <h3 class="text-center">Javascript Requirements</h3>
                                <li>Get all the keys from document</li>
                                <li>Create operators variable for + || - || * || /</li>
                                <li>Create variable for decimal point and set it to be default false</li>
                                <li>Add onclick event to all the keys and perform operations</li>
                                <li>Get the input and button values inside the click function</li>
                                <li>Make an <code>If</code> statement for if clear key is pressed, erase everything</li>
                                <li>Make an <code>else if</code> statement for if equal evaluator key is pressed, calculate and display the result</li>
                                <li>Create an <code>else if</code> statement to stop the user from being able to add 2 or more decimals being added</li>
                                <li>Lastly create a final <code>else</code> statement to append the value to the display</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="text-center">Here is what you should be aiming for</h3>
            <div id="calculator">
                
                <!-- Screen and clear key -->
                <div class="top">
                    <span class="clear">C</span>
                    <div class="screen"></div>
                </div>
                
                <div class="keys">
                    <!-- operators and other keys -->
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                    <span class="operator">+</span>
                    <span>4</span>
                    <span>5</span>
                    <span>6</span>
                    <span class="operator">-</span>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span class="operator">*</span>
                    <span>0</span>
                    <span>.</span>
                    <span class="eval">=</span>
                    <span class="operator">/</span>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-success text-center" style="width:100%;padding:0 -15px 0;margin:0;"><div class="fa fa-child fa-2x"></div> Once this is all complete, you'll have built a working calculator<div class="fa fa-child fa-2x"></div></div>
                </div>
            </div>
        </section>

        <section id="html">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <h1>Step 1: HTML</h1>
                    <h2>Everything you need is now listed out & drawn out, now you can begin the coding!</h2>
                    <p class="lead">Lets look a little deeper into what you need for HTML</p>
                    <p>You will need to create the following:</p>
                    <ol class="bg-success" style="padding:5px 25px;">
                        <li>A div that surrounds the calculator keys, clear button and display</li>
                        <li>A div for the display screen & clear button</li>
                        <li>A div for all the keys</li>
                        <li>Span tags with each individual key inside the key div</li>
                    </ol>
                    <p>Begin inside your body tag, create a <code>div</code> and set the <code>id</code> to calculator - this will serve as your wrapper for styling.</p>
                    <!-- html step 1 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html1.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <p>Inside this div we need two more <code>div</code> tags, set the first div to have an <code>id</code> of top will contain the clear button & display input - to the second new <code>div</code> set it to have an <code>id</code> of keys.</p>
                    <!-- html step 2 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html2.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <p>Now you have the two divs you need to make the calculator. To your div with an id of top, you need to add two things inside here - first the clear button (" C ") - do this inside of a <code>span</code> tag, while your at it add a class to this span of clear.</p>
                    <p>Next create a new <code>div</code> below your span, this will serve as your input & output display, so add a class of screeen to this div.</p>
                    <!-- html step 3 -->
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html3.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <p>Finally you are up to the keys, you will want to make each key to be surrounded by a <code>span</code> tag in this order - 7 || 8 || 9 || + || 4 || 5 || 6 || - || 1 || 2 || 3 || x || 0 || . || = || ÷</p>
                    <p>For each operator, add a <code>class</code> of operator so we can style these different from the numerators & equal evaluator.  Last add a <code>class</code> of eval to your span with with equal evaluator.</p>
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
                        <li>Calculator background - <span class="text-danger">used to make the calculator stand out</span></li>
                        <li>Clear button - <span class="text-danger">will reset the calculator when a user clicks it (" C ")</span></li>
                        <li>Output display - <span class="text-danger">displays the values the user inputs & the output form the equal evaluator (" = ")</span></li>
                        <li>Numerator buttons - <span class="text-danger">serves as the numbers the user can input (" 0 - 9 "")</span></li>
                        <li>Operator buttons - <span class="text-danger">serves as the operators the user can use (" + | - | x | ÷ | . ")</span></li>
                        <li>Equal operator - <span class="text-danger">used to find the results of the input (" = ")</span></li>
                    </ol>
                    <br>
                    <p>Begin by styling your <code>#calculator</code> selector, set the <code>width</code> to 325px, the <code>height</code> to auto, the <code>margin</code> to 3% for the top & bottom and auto for the left & right, the <code>padding</code> to 20px for the top, 20px for the left & right and 9px for the bottom, the <code>background</code> to hex-color: 9DD2EA.</p>
                    <p>Continue with the <code>#calculator</code> selector, set the <code>border-radius</code> to 3px all around, add the <code>box-shadow</code> property and set the values 0px for the h-shadow - 4px for the v-shadow with a hex-color: of 009DE4 & for the second shadow - to have the values of 0px for the top, 10px for the left & right, & 15px to the bottom with a color value rgba black and 0.2 opacity. Lastly add the <code>font</code> property and set the value to be: bold 14px and have a Arial font - this will make your text stand out more!</p>
                    <!-- css step 1 -->
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css1.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 2 -->
                    <p>Now that you styled your <code>#calculator</code>, you can make a new selector choosing your <code>span</code> that has a class of clear- you will simply need to float this to the left.</p>                
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css2.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 3 -->
                    <p>Time to style the input / output screen we keep referring too, start a new CSS selector and set it to find your class of screen - first set the <code>height</code> to 40px, the <code>width</code> to 212px. <code>float</code> this selector to the right, add some <code>padding</code> 0 for the top & bottom, and 10px for the left & right. Set the <code>background</code> to a rgba value of black with the opacity of 0.2, the <code>border-radius</code> to 3px, finally add a <code>box-shadow</code> and make it inset, as well as 0 for the horizontal shadow, 4px for the vertical shadow and the rgba value of black with a opacity of 0.2</p>  
                    <p>Next mess with the Typography for this input / output div. Increase the <code>font-size</code> to 17px, the <code>line-height</code> to 40px, the <code>color</code> to white, <code>text-align</code> to center, <code>letter-spacing</code> to 1px.</p>               
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css3.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 4 -->
                    <p>This one is pretty simple, but extremely important to make the calculator work visually, call two CSS selectors: the class of keys & top, set these selectors to have a overflow of hidden.</p>                
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css4.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 5 -->
                    <p>For this one you need to target to selectors again, the first is any <code>span</code> tag found inside any tag class of keys & the second is the <code>span</code> with a class of clear. To this selectors set the <code>float</code> of left, the <code>position</code> to relative, the <code>top</code> to have a 0 value, set the <code>cursor</code> to have a pointer value. Adjust the <code>width</code> to 66px and a <code>height</code> of 36px.</p>                 
                    <p>Add a <code>background</code> of white, a <code>border-radius</code> of 3px, a <code>box-shadow</code> to have a 0px value for h-shadow and 4px for v-shadow, set the box-shadow color as well, we used rgba(0, 0, 0, 0.2). Set the <code>margin</code> to 0 on top, 7px on the right, 11px on the bottom and 0 on the right.  Set the <code>color</code> property to hex-color: #888, the <code>line-height</code> to 36px, the <code>text-align</code> to center. Add a <code>user-select</code> property and set its value to none. Lastly add a <code>transition</code> property and set it to transition all in 0.2s with a ease effect.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css5.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 6 -->
                    <p>Now you can style the keys individually, use the selector that targets any <code>span</code> tags with a class of operator. You will need a <code>background</code>, we used this light-grey hex-color: FFF0F5, also set the <code>margin-right</code> to have a value of 0.</p>   
                    <p>Moving along to the <code>span</code> with a class of eval, (your "=" button), set a <code>background</code>, we used this yellow hex-color: FFE8AA that stands out from everything else, also add a <code>box-shadow</code> 0px for the horizontal-shadow & 4px for the vertical-shadow with a hex-color: of FED156,to make it look more like a button.</p> 
                    <p>Last call a selector for the <code>span</code> with a class of clear, (your "C" button), set a <code>background</code>, we used this red hex-color: EE836E that stands out from everything else, add a <code>box-shadow</code> 0px for the horizontal-shadow & 4px for the vertical-shadow with a hex-color: of E85C41, this makes it look more like a click-able button, also add a <code>color</code> to your font of white.</p>             
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css6.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 7 -->
                    <p>Time to mess around with the hover pseudo-class. Use a CSS selector to target any <code>span</code> and add the :hover pseudo-class. Set the <code>background</code> color, we used a nice purple hex-color: 9C89F6, you will also want to change the <code>box-shadow</code> property, we used a slightly darker purple hex-color: 6b54d3, finally change the <code>color</code> of the font to white.</p>
                    <p>Use a new CSS selector to target any <code>span</code> with a class of eval and add the :hover pseudo-class to it. Set the <code>background</code> color, we used a dark yellow hex-color: FED156, you will also want to change the <code>box-shadow</code> property's color, we used a slightly darker yellow hex-color: FEBE12 - keep the same values of 0 & 4px for the shadow, finally change the <code>color</code> of the font to white.</p>  
                    <p>Call another CSS selector to target any <code>span</code> with a class of clear and add the :hover pseudo-class to it. Set the <code>background</code> color, we used a dark red hex-color: E85C41, you will also want to change the <code>box-shadow</code> property's color, we used a slightly darker red hex-color: DB3A1B - keep the same values of 0 & 4px for the shadow. Finally change the <code>color</code> of the font to white.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css7.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 8 -->
                    <p>Finally you can create the "pressed" effect on your buttons. start with a new CSS selector and look for any <code>span</code> tags and add the pseudo-class of active to it. Change the <code>box-shaodw</code> property to be 0px for both horizontal & vertical shadow, also change the <code>top</code> property to 4px.</p>   
                    <p>Begin with a new CSS selector and look for any <code>span</code> tags with a class of eval and add the pseudo-class of active to it. Change the <code>box-shaodw</code> property to be 0px for both horizontal & vertical shadow, also change the <code>top</code> property to 4px.</p>
                    <p>Start with a new CSS selector and look for any <code>span</code> tags with a class of clear and add the pseudo-class of active to it. Change the <code>box-shaodw</code> property to be 0px for both horizontal & vertical shadow, also change the <code>top</code> property to 4px.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css8.php') ?>
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
                        <li>Get all the keys from document</li>
                        <li>Create operators variable for + || - || * || /</li>
                        <li>Create variable for decimal point and set it to be default false</li>
                        <li>Add onclick event to all the keys and perform operations</li>
                        <li>Get the input and button values inside the click function</li>
                        <li>Make an <code>If</code> statement for if clear key is pressed, erase everything</li>
                        <li>Make an <code>else if</code> statement for if equal evaluator key is pressed, calculate and display the result</li>
                        <li>Create an <code>else if</code> statement to stop the user from being able to add 2 or more decimals being added</li>
                        <li>Lastly create a final <code>else</code> statement to append the value to the display</li>
                    </ol>
                    <br>                
                    <!-- js step 1 -->
                    <p>Begin by setting a Global variable of keys set it to get the document and use the method <code>querySelectorAll</code> to find <code>#calculator span</code>.  Second Global Variable will be the operators, set this to an array equal to the 4 operators we are going to use ( + | - | * | / ).  The Third and final Global var will be to check if there was a decimalAdded, set this var equal to false.</p>                 
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js1.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 2 -->
                    <p>Now you need a for loop to run every time a user puts some input in or looks for an output. Set the first statements to have the <code>var</code> i to equal 0, have the second statement check to make sure i is less than the keys.length, and have the third statement use the increment operator to increase the i value.</p>     
                    <p>Within this loop you need to call the keys variable with a index parameter, add a .onclick method and set it equal to a function(e). </p>    
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js2.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 3 -->
                    <p>Next you can get the input and button values.  Inside your function add three local variable, the first call input and set it equal to document.querySelector() and have it find your screen class. The second <code>var</code> call inputVal and set this equal to input.innerHTML, and the third <code>var</code> call btnVal and get this equal to this.innerHTML.</p>                 
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js3.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 4 -->
                    <p>Lets make the clear button work before we go any further. Below your 3 new local variables start an <code>if statement</code> set the condition to your btnVal and set it to work if it is == to 'C'. The code block you want to execute if true will be to set the input.innerHTML = '' and the ecimalAdded = false.</p>                 
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js4.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 5 -->
                    <p>Add a <code>else if</code> statement to your if statement - you need this to calculate and display the result when a user clicks the equal operator. Set the else if condition to btnVal equal to '='. Within this else if add a <code>var</code> with a name of equation, set it equal to inputVal. Add a second local <code>var</code> called lastChar, set it equal to equation[equation.length - 1].</p>                 
                    <p>Next you need two <code>if</code> statements inside your else if statement, have your first if statement check for <code>operators.indexOf(lastChar)</code> being greater than <code>-1</code> or <code>lastchar</code> equal to '.' Have this code execute if true, <code>equation</code> equals <code>equation.replace(/.$/, '')</code>.</p>
                    <p>Your second if statement should just check for the conditional <code>equation</code>. If this statement is true have the browser run a block of code to set the input.innerHTML to equal <code>eval(equation)</code> - giving the user their answer!!! Last add a decimalAdded and set it equal to false.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js5.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- js step 6 -->
                    <p>Add the final else statement to your if statement - you need use this to see if another key has been pressed, and append it. Set your input.innerHTML = +=btnVal.</p>                 
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js6.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>
                </div>
            </div>
        </section>






        <section id="calc_display">
            <div class="text-center bg_img">
                <h3><a href="http://codepen.io/CodifyAcademy/pen/tJEqG" target="_blank">Check Out This Working Demo</a></h3>
                <img src="img/gj.jpg" class="img-responsive img-rounded" style=" height: 400px; border: 5px solid black; margin: 0 auto;  display:block;" alt="Woot">
            </div>
            <div class="text-center alert alert-danger" style="position:absolute; bottom:0; width:100%;"><i class="fa fa-child fa-2x"></i> WooHoo!!! You've Finished <i class="fa fa-child fa-2x"></i></div>
        </section>
        
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        
    </body>
</html>
