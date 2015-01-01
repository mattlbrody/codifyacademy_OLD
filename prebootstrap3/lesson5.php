<div class="tab-pane" id="tab5">
  <article class="lesson5">

    <div class="lesson_title">
      <h4>Lesson 5</h4>
      <h1>Bootstrap's Buttons & Images</h1>
    </div>

    <!-- buttons -->
    <div class="buttons">
    	<h2>BUTTONS</h2>
    	<hr>

    	<!-- options -->
    	<div class="col-md-12">
    		<h3>Button Options</h3>
    		<p>Use any of the available button classes to quickly create a styled button.</p>
    		<div class="table_example">
				<!-- Standard button -->
				<button type="button" class="btn btn-default">Default</button>

				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
				<button type="button" class="btn btn-primary">Primary</button>

				<!-- Indicates a successful or positive action -->
				<button type="button" class="btn btn-success">Success</button>

				<!-- Contextual button for informational alert messages -->
				<button type="button" class="btn btn-info">Info</button>

				<!-- Indicates caution should be taken with this action -->
				<button type="button" class="btn btn-warning">Warning</button>

				<!-- Indicates a dangerous or potentially negative action -->
				<button type="button" class="btn btn-danger">Danger</button>

				<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
				<button type="button" class="btn btn-link">Link</button>
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/options.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- sizes -->
    	<div class="col-md-12">
    		<h3>Button Sizing</h3>
    		<p>
	    		Fancy larger or smaller buttons? Add
				<code>.btn-lg</code>
				,
				<code>.btn-sm</code>
				, or
				<code>.btn-xs</code>
				for additional sizes.
			</p>
    		<div class="table_example">
				<p>
				  <button type="button" class="btn btn-primary btn-lg">Large button</button>
				  <button type="button" class="btn btn-default btn-lg">Large button</button>
				</p>
				<p>
				  <button type="button" class="btn btn-primary">Default button</button>
				  <button type="button" class="btn btn-default">Default button</button>
				</p>
				<p>
				  <button type="button" class="btn btn-primary btn-sm">Small button</button>
				  <button type="button" class="btn btn-default btn-sm">Small button</button>
				</p>
				<p>
				  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
				  <button type="button" class="btn btn-default btn-xs">Extra small button</button>
				</p>
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/sizing.php'); ?>
				</code>			
			</div>
			<p>
				Create block level buttons—those that span the full width of a parent— by adding
				<code>.btn-block</code>
				.
			</p>
			<div class=" col-md-8 col-md-offset-2">
				<div class="table_example">
					<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
					<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
				</div>
				<div class="well well-sm code_margin">		
					<code>
						<?php include('code/lesson5/full_width_sizing.php'); ?>
					</code>			
				</div>
			</div>
    	</div>

    	<!-- panel -->
    	<div class="col-md-12">
	    	<div class="panel panel-info">
	    		<div class="panel-heading">
	    			Context-specific usage
	    		</div>
	    		<div class="panel-body">
    				Button classes can be used on
					<code>&lt;a&gt;</code>
					and
					<code>&lt;button&gt;</code>
					elements, <strong>BUT</strong> only
					<code>&lt;button&gt;</code>
					elements are supported within Bootstrap nav and navbar components.
	    		</div>
	    	</div>
	    </div>

    	<!-- tags -->
    	<div class="col-md-12">
    		<h3>Usable Tags</h3>
    		<p>
    			Use the button classes on an
				<code>&lt;a&gt;</code>
				,
				<code>&lt;button&gt;</code>
				, or
				<code>&lt;input&gt;</code>
				element.
			</p>
    		<div class="table_example">
				<a class="btn btn-default" href="#" role="button">Link</a>
				<button class="btn btn-default" type="submit">Button</button>
				<input class="btn btn-default" type="button" value="Input">
				<input class="btn btn-default" type="submit" value="Submit">
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/tags.php'); ?>
				</code>			
			</div>
    	</div>
    </div>

    <div class="row row_pad"></div>

    <!-- images -->
    <div class="images">
    	<h2>IMAGES</h2>
    	<hr>

    	<!-- Responsive Images -->
    	<div class="col-md-12">
    		<h3>Responsive Images</h3>
    		<p>
	    		Images in Bootstrap 3 can be made responsive-friendly via the addition of the
				<code>.img-responsive</code>
				class. This applies
				<code>max-width: 100%;</code>
				and
				<code>height: auto;</code>
				to the image so that it scales nicely to the parent element.
			</p>
			<br>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/responsive.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- Image Shapes -->
    	<div class="col-md-12">
    		<h3>Image Shapes</h3>
    		<p>
    			Add classes to an
				<code><img></code>
				element to easily style images in any project.
    		</p>
    		<div class="table_example table_images">
				<img src="img/place_holder.jpg" alt="image rounded" class="img-rounded">
				<img src="img/place_holder.jpg" alt="image circle" class="img-circle">
				<img src="img/place_holder.jpg" alt="image thumbnail" class="img-thumbnail">
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/shapes.php'); ?>
				</code>			
			</div>
    	</div>
    	
    </div>

    <!-- lesson task -->
	<div class="task">
		<div class="task1">
			<div class="col-md-8">
				<h3>Creating buttons and adjusting the look of our images is a breeze now...so lets write some more of our own <code>CODE</code>.</h3>
				<p class="lead">Open our project folder we have been using the past few days</p>
				<ol>
					<li>Lets start by creating 2 new divs, one with a class of <code>container-fluid</code>, and one with a class of <code>container</code>.</li>
					<li>Again we will add a <code>row</code> inside each new div.</li>
					<li>Lets start by making a few full-width buttons to see what happens in each container. Inside each <code>row</code> add <code>button</code> tags. Attach a class of <code>btn btn-primary btn-block</code> to each, and in between the button tag name our new buttons, i.e. Submit, Send Email, Default Button.</li>
					<li>Add a <code>&lt;br&gt;</code> after our new button tags.</li>
					<li>Time to add some grid components - make 2 new divs, 1 in each row - with class of <code>col-md-8</code> for the 1st one and <code>col-md-6 col-md-offset-3</code> for the 2nd.</li>
					<li>In our <code>col-md-8</code> div we will make our Bootstrap Buttons!!! ... Lets start with 2 <code>button</code> tags, 1 <code>&lt;input&gt;</code> 1 <code>a</code> tag, and 1 more <code>button</code></li>
					<li>Now we can a few classes to make this components look nice in a few seconds. <strong>But</strong> first we should give these buttons names, in between the opening and closing <code>a & button</code> tags give each button a name i.e. Submit, Default Button, Anchor Tag, Button Tag. Finally add a value attribute to the input to name it i.e <code>value="Input Button"</code>.</li>
					<li>To our 1st <code>button</code> add a few classes <code>btn btn-lg</code>. To our 2nd <code>button</code> add <code>btn btn-sm btn-primary</code>.</li>
					<li>For our <code>input</code> add a class of <code>btn btn-danger btn-lg</code>, also add the type attribute <code>type="button"</code>.</li>
					<li>Our anchor should get the class of <code>btn btn-success</code>.</li>
					<li>Finally for our 3rd button a class our <code>btn btn-default btn-lg</code>.</li>
					<li>Inside our other container lets add 3 <code>img</code> tags inside our <code>col-md-6 col-md-offset-3</code> div.</li>
					<li>Add 3 Images with a width no greater than 250px. If you need one you can save <a href="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png" target="_blank">Sweet Picture!</a> by clicking this link, then right clicking the image and saving it to our img folder.</li>
					<li>To our 1st <code>img</code> add a class of <code>img-circle</code>, to round our Image.</li>
					<li>To our 2nd <code>img</code> add a class of <code>img-rounded</code>, to round our Image.</li>
					<li>To our 3rd <code>img</code> add a class of <code>img-thumbnail</code>, to round our Image.</li>
				</ol>
				<p>Open this file in our browser to see what we just did!</p>
				<br>
				<a href="answers/lesson5.php" target="_blank" class="text-danger">Check out how our new file should look</a>
				<p>EXCELLENT!!! you just hand built your first bootstrap buttons with some images, Everyone loves nice buttons and images! Inspect some of the elements to see what Bootstrap's Css is doing to our tags!</p>
				<p>Check out <a href="http://getbootstrap.com/css/#buttons" target="_blank">Bootstrap Buttons</a> & <a href="http://getbootstrap.com/css/#images" target="_blank">Bootstrap Images</a> to go even  more in-depth!</p>
				<div class="next1">
					<a href="#tab6" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>On to the next section More Buttons & Inputs! <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Buttons & Images</Strong> Task Before Moving On!</a>
		</div>
	</div>

  </article>
</div>