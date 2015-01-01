<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Codify Academy - Slider Plugin - Made with HTML5, CSS3 & jQuery</title>
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
                <h1 class="text-center"><img src="img/jQuery.png" style="margin-top:-5px;"> Codify Academy's Slider Plugin, using jQuery <img src="img/jQuery.png" style="transform: scale(-1, 1);
 margin-top:-5px;"></h1>
                <h2 class="text-center"><a href="student.zip">Download Student Project Files</a></h2>
                <p class="lead text-center">Lets take a look at the step by step process on how to complete this basic slider plugin.</p>
                <h4 class="text-success text-center">Here is a break down of what we need to do from start to finish.</h4>
                <div class="steps">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="bg-success">
                            <h3 class="text-center">HTML Structure</h3>
                            <ol style="padding:5px 25px;">                                
                                <li>Create a wrapper to surround everything</li>
                                <li>Create a wrapper for the image gallery</li>
                                <li>Create tags to surround each gallery image</li>
                                <li>Add an image inside each gallery image tag</li>
                                <li>Create control for left & right directionals</li> 
                            </ol>    
                        </div>      
                        <div class="bg-info">      
                            <h3 class="text-center">CSS Style Requirements</h3>
                            <ol style="padding:5px 25px;">                                
                                <li>Add style to the wrapper div</li>
                                <li>Position the gallery div</li>
                                <li>Style for each gallery item</li>
                                <li>Add styling for each image</li>
                                <li>Give styles to the control wrapper</li>
                                <li>Style for each control (left & right)</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-danger" style="margin-top:13%;">
                            <h3 class="text-center">JavaScript Requirements</h3>
                            <ol style="padding:5px 25px;">                                
                                <li>Create a blank function to stop other jQuery from interacting with this plugin</li>
                                <li>Declare the function name, allowing use to access the object later</li>
                                <li>Set some general variables for total width and the max scroll position</li>
                                <li>Create a function to make sure the item exist so we can loop through them</li>
                                <li>Add some basic HTML manipulation when the prev and next divs are clicked</li>
                                <li>Initialize the plugin in HTML so the slider works</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="text-center">Here is what you should be aiming for</h3>
            <img src="img/finish.jpg" style="border-radius:25px; margin:25px auto 20px; display:block;border:3px solid #141414;">
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-danger text-center" style="width:100%;padding:0 -15px 0;margin:0;"><div class="fa fa-child fa-2x"></div> Once this is all complete, you'll have built a working jQuery Plugin<div class="fa fa-child fa-2x"></div></div>
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
                    <ol class="bg-success" style="padding:15px 35px;">
                        <li>Create a wrapper to wrap everything up in a nice accessible div</li>
                        <li>Create a wrapper for the image gallery - to wrap all the images & image wrapper tags</li>
                        <li>Create tags to surround each gallery image - one for each image you will include</li>
                        <li>Add an image inside each gallery image tag - for each you want to include</li>
                        <li>Create control for left & right directionals - to make the slider move later</li>
                    </ol>
                    <!-- HTML step 1 -->
                    <p>Begin inside your body tag, create a <code>div</code> and set the <code>class</code> to <code>wrapper</code> - this will serve as your wrapper for styling later.</p>                    
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html1.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- HTML step 2 -->
                    <p>Inside this <code>div class="wrapper"</code> we need one <code>div</code> tag, to wrap the gallery, set the <code>class</code> to <code>gallery clearfix</code>.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html2.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- HTML step 3 -->
                    <p>Move inside the <code>div class="gallery clearfix"</code>, we need to create enough div tags for all the images we have, 8 for this project <code>div</code> tag,  set the <code>class</code> of each one to <code>gallery__item</code>.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html3.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- HTML step 4 -->
                    <p>Time to add the images, create an <code>img</code> tag, inside each <code>gallery_item</code> div and connect them using the <code>src=""</code> data-attribute.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html4.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- HTML step 5 -->
                    <p>Next we need to add the two controls for left and right, create an <code>div</code> tag outside all other tags, with the classes of <code>gallery_controls clearfix</code>.</p>
                    <p>Inside this control wrapper add two more <code>div</code> tags, to the first add a <code>class</code> of <code>gallery_controls-prev</code>. To the second add a <code>class</code> of <code>gallery_controls-next</code>.</p>
                    <p>Finally we need to add icons inside of the two new <code>div</code> tags, inside the first div add a <code>i</code> tag and add the classes of <code>fa fa-chevron-left fa-2x</code>. Do the same inside the second new div tag, create a <code>i</code> tag and add the classes of <code>fa fa-chevron-right fa-2x</code></p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html5.php') ?>
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
                    <ol class="bg-info" style="padding:15px 35px;">
                        <li>Add style to the wrapper div</li>
                        <li>Position the gallery div</li>
                        <li>Style for each gallery item</li>
                        <li>Add styling for each image</li>
                        <li>Give styles to the control wrapper</li>
                        <li>Style for each control (left & right)</li>                       
                    </ol>
                    <br>                    
                    <!-- css step 1 -->
                    <p>Let us begin by the <code>wrapper</code> div in <code>main.css</code>, we can center the div using <code>margin</code>, , set the value to 10% for the top, auto for the left & right, and 0 for the bottom. Define the <code>width</code> to 732px. Add a little <code>box-shadow</code>, adding some <code>inset</code> box-shadow to the left and right of the wrapper, set the value of the left to 10px for the h-shadow, 0 for the v-shadow, 10px for the blur, -10px for the speard (size of the shadow) and a color of #333.</p>
                    <p>Now set the value of the right inset <code>box-shadow</code> to -10px for the h-shadow, 0 for the v-shadow, 10px for the blur, -10px for the speard (size of the shadow) and a color of #333.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css1.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 2 -->
                    <p>Next up we need to position the <code>gallery</code> div, give this a relative <code>position</code>. Set the <code>left</code> & <code>top</code> properties to 0.</p>
                    <p>Now we can move on to styling each <code>gallery_item</code>, have them <code>float</code> to the left. Add some <code>margin</code> of 0 for the top and bottom, and 8px fo r the left and right. Add <code>padding</code> to each item, 13px for the top and bottom and 0 for the left and right.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css2.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>
                    <!-- css step 3 -->
                    <p>Time to add some styling to each image we have, add a <code>height</code> property and set this to 175px. Set the <code>width</code> property to 160px, to round the images we can add a <code>border-radius</code> of 50%. Last add a <code>border</code> of 3px solid with a color of #272727, or what ever you want the color to be.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css3.php') ?>
                        </pre>
                        <button class="btn btn-primary reveal_code">Check Out the Code Here</button>
                    </div>   
                    <!-- css step 4 -->
                    <p>Last we can style the div that contains the controls and the controls themselves. Begin with the <code>gallery_controls</code> all we need to add is a <code>margin</code> of 0 for the top and bottom and 25% for the left and right.</p>
                    <p>Now we have the controls centered, lets add some floats to each <code>gallery_controls-prev</code> & <code>gallery_controls-next</code>, <code>float</code> the previous to the left, and the next to the right, also you can change the <code>cursor</code> property to pointer to each one, so we get a nice looking hand instead of a text cursor.</p>
                    <div class="code">   
                        <pre class="prettyprint css">
<?php include('code/css4.php') ?>
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
                    <h1>Step 3: JavaScript</h1>
                    <h2>Time to make your first plugin and link it to the HTML so it will scroll through all the images we added earlier!</h2>
                    <p class="lead">Lets revisit what your JavaScript needs are for your slider plugin</p>
                    <ol class="bg-danger" style="padding:15px 35px;">
                        <li>Create a blank function to stop other jQuery from interacting with this plugin</li>
                        <li>Declare the function name, allowing use to access the object later</li>
                        <li>Set some general variables for total width and the max scroll position</li>
                        <li>Create a function to make sure the item exist so we can loop through them</li>
                        <li>Add some basic HTML manipulation for when the prev and next divs are clicked</li>
                        <li>Initialize the plugin in HTML so the slider works</li>
                    </ol>
                    <br>                
                    <!-- js step 1 -->
                    <p>We need to start by creating a <code>function</code> that passes the parameter of jQuery - ($) - to stop all other jQuery from interacting with this plugin.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js1.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div> 
                    <!-- js step 2 -->
                    <p>Next we need to declare the function name and have it create a <code>function</code> object that we can call later, i named mine <code>codifySlider</code>, feel free to label yours ass you wish.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js2.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div> 
                    <!-- js step 3 -->
                    <p>Now that the function is created and no other jQuery can interact with it, we can continue by setting some global variables, start with a simple on, call it <code>totalWidth</code>, have this set to zero to start.</p>
                    <p>Next we need to update the <code>totalWidth</code>, for each gallery item we have. Start by calling the class of <code>gallery_item</code> using jQUery, attach the <code>.each</code> and have this set to a function that will take the <code>totalWidth</code> and have it equal the <code>totalWidth</code> + the <code>outerWidth</code> of each item. Pass the true boolean through the <code>outerWidth</code> function.</p>
                    <p>Last we need one more global variable, create one called <code>maxScrollPosition</code> have this equal the <code>totalWidth</code> minus the <code>outerWidth</code> of the div with a class of <code>wrapper</code>.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js3.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div> 
                    <!-- js step 4 -->
                    <p>With the Global Variables out of the way we can get down to the core functionality behind the plugin. Start a new function, call it <code>toGalleryItem</code> and pass the parameter of <code>$targetItem</code>, so we can animate to the target item.</p>
                    <p>Within the function we fist need to make sure that the <code>$targetItem</code> is in existence, use the JavaScript function <code>.length</code> to check conditional in a <code>if else</code> statement.</p>
                    <p>If this does turn out to be true we need a variable to store the new position of the slider, create a var named <code>newPosition</code> have to equal to the <code>$targetItem</code> then add the <code>.position()</code> function to it and then add <code>.left</code>, we do this because the newPosition will be just to the left of the $targetItem.</p>
                    <p>Next we need to check <code>if</code> the <code>newPosition</code> is less than or equal to the <code>maxScrollPosition</code> variable, this ensures the new position is not greater than the maximum width of the image gallery.</p>
                    <p>If this conditional is met we need to add a class to the $targetItem of <code>gallery_item--active</code> using jQuery's <code>addClass</code> function. We also need to remove a class from the $targetItem <code>siblings</code> with the same class name as above <code>gallery_item--active</code>. Lastly we need to animate the <code>gallery</code> class to the <code>left</code> of the negative of the <code>newPosition</code>.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js4.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div> 
                    <!-- js step 5 -->
                    <p>Time to add some basic HTML manipulation - start by adding the jQuery <code>width</code> function with the parameter of the <code>totalWidth</code> variable to the <code>gallery</code> class.</p>
                    <p>Next we need to add a active class to the first <code>gallery_item</code>, we  an achieve this by calling the pseudo-selector of first on the <code>gallery_item</code> with jQuery and using the <code>addClass()</code> function to add a class of <code>gallery_item--active</code></p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js5.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the Code Here</button>
                    </div>    
                    <!-- js step 6 -->
                    <p>Now that all that is set up, we can add some click functions to the buttons initialize the function and we will be done! Begin by finding the class of <code>gallery_controls-prev</code> using jQuery, set this to a <code>.click(function(){ });</code>.</p>
                    <p>Inside this click function create a new variable called <code>$targetItem</code> set this equal to the class of <code>gallery_item--active</code> and add the <code>.prev()</code> jQuery function to the end. Then call the <code>toGalleryItem</code> and pass the <code>$targetItem</code> argument into it.</p>
                    <p>Now we need one more on click function add to the <code>gallery_controls-next</code> class, inside create a new variable called <code>$targetItem</code> again, set this equal to the class <code>gallery_item--active</code> then add the <code>.next()</code> function to the end. Again call the <code>toGalleryItem</code> and pass the <code>$targetItem</code> argument into it.</p>
                    <p>Excellent, now to initialize the plugin, Go back to your <code>HTML</code> create a script just before the <strong>CLOSING</strong> <code>/body</code> tag. Call the <code>wrapper</code> class using jQuery and add the <code>.codifySlider()</code> plugin (or whatever you named you Plugin) to this wrapper div to active it.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/js6.php') ?>
                        </pre>
                        <button class="btn btn-danger reveal_code">Check Out the JS Code Here</button>
                    </div>
                    <p>Here is the HTML needed to initialize the Slider PLugin.</p>
                    <div class="code">   
                        <pre class="prettyprint">
<?php include('code/html6.php') ?>
                        </pre>
                        <button class="btn btn-success reveal_code">Check Out the HTML Code Here</button>
                    </div>                                  
                </div>
            </div>
        </section>
        <!-- finish section -->
        <section id="finish">
            <div class="text-center bg_img">
                <h3><a href="http://codepen.io/CodifyAcademy/pen/raaXoz" target="_blank">Check Out This Working Demo</a></h3>
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
