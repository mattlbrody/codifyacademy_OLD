<?php
include('header.php');
?>
  <body>

  	<section class="hero">
  		<!-- Logo -->
  		<div class="logo">Codify Academy</div>
  		<!-- Intro Text -->
  		<div class="container">
  			<div class="opening-header">
	  			<h1>Learning to code is Easier with a Mentor</h1>
	  			<p class="col-md-6 col-md-offset-3">Codify Academy brings you the support you need to be successful with built-in accountability, community support and effective learning resources.</p>
	  			<br><br>
	  			<div class="col-md-12 form-wrapper">		  			
		  			<form method="post" action="processc.php">
		  				<div class="col-md-12">
		  					<p class="sign_up">Our next class begins on July 12th. Enter your email to preview the syllabus.</p>
		  				</div>
		  				<div class="col-md-5 col-md-offset-2">
		  					<input required type="text" class="form-control syllabus" name="email" placeholder="enter your email address here" />
		  				</div>
		  				<div class="col-md-3">
		  					<button class="btn btn-danger btn-group-justified syllabus" name="submit">Learn More&nbsp;<i class="fa fa-angle-double-right"></i></button>
		  				</div>
		  			</form>
		  		</div>
	  		</div>		
  		</div>

  	</section>

  	<section class="overview">
  		<div class="container">
	  		<div class="single-col">
		  		<div class="col-md-6">
		  			<h3 class="upper">Learn how to Be a Front End Developer</h3>
		  			<p>Learn to code amazing sites and apps using HTML, CSS and Javascript right in your browser. We help get you the solid skills to be portfolio and job ready.</p>
		  		</div>
		  		<div class="col-md-6">
		  			<img src="img/Computer.png" alt="picture here">
		  		</div>
		  	</div>
		  	<div class="row"></div>
		  	<div class="single-col">
		  		<div class="col-md-6">
		  			<img src="img/Wizard.png" alt="picture here" class="adv-img">
		  		</div>
		  		<div class="col-md-6">
		  			<h3 class="upper">The Codify Academy Advantage</h3>
		  			<p>Codify Academy is online and can be accessed from anywhere in the world. On their path toward becoming a developer, every student gets mentorship from a professional developer and joins an active community of learners. Gain access to step-by-step guidance and achieve your learning goals.</p>
		  			<ul>
		  				<li>
		  					<span class="fa fa-check-circle-o"></span>
							Weekly mentor sessions held via Google hangouts.
		  				</li>
		  				<li>
		  					<span class="fa fa-check-circle-o"></span>
							Curriculum with clear structure and built-in guidance.
		  				</li>
		  				<li>
		  					<span class="fa fa-check-circle-o"></span>
							Daily access to mentors through open office hours.
		  				</li>
		  				<li>
		  					<span class="fa fa-check-circle-o"></span>
							Projects designed to help you build a portfolio.
		  				</li>
		  			</ul>
		  		</div>
		  	</div>
	  	</div>
  	</section>

  	<section class="reviews">
  		<div class="container">
  			<div class="row">
  				<h1>Meet the Front-end coding mentor!</h1>
  			</div>  
  			<hr>			
  			<div class="row">
          <div class="col-md-3 col-md-offset-2">
						<img class="img-circle center-block" src="img/chris.jpg" alt="person3" width="150px" height="150px" />
						<div class="text-block">
							<p class="name text-center">Chris Brody</p>
							<p class="sub text-center">Front-End mentor</p>
						</div>
					</div>
          <div class="col-md-6">
            <p>"Chris is all about the front end of web development, HTML, CSS, Javascript, Jquery, AJAX. Chris loves to sharpen his skills by teaching others how to code. He specialzes in rapid prototyping new projects as well as in browser design. Chris has been coding for the last 4 years. Before he taught himself how to code Chris was a waiter for 8 years. Now all he serves up is awsome advice and great hands on experience."</p>
          </div>
  			</div>
  		</div>
  	</section>

  	<section class="courses">
  		<div class="container">
  			<div class="row">
  				<h2 class="col-md-10 col-md-offset-1">learn front end development</h2>
  				<div class="row"></div>
  				<div class="col-md-5 col-md-offset-1">
  					<p>Build interactive websites using the popular framework Twitter Bootstrap - the quickest and most powerful way to build sites and code designs. In the course, you will build and launch a fully responsive site from scratch and learn how to hook into API's to display information from other sites.</p>
  					<p class="upper">What you'll learn:</p>
  					<p>HTML5, CSS3, Javascript, Jquery, AJAX, Twitter Bootstrap, API's</p>
  				</div>

  				<div class="col-md-4 col-md-offset-1">
  					<p class="upper">Pricing and Duration:</p>
  					<br>
  					<p class="upper">$649</p>
					per month, 3 months 
					<br>
					<p class="upper">$325</p>
					per month, 6 months 
					<br>
					<p class="upper">Guarantee:</p>
					<p>If you're not satisfied in your first two weeks, we'll give you your money back.</p>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="email-capture">
  		<div class="container">
  			<h1>Enter your email to preview the Front-End syllabus </h1>
  			<form method="POST" action="processc.php">
				<div class="col-md-5 col-md-offset-2">
					<input required type="text" class="form-control syllabus" name="email" placeholder="enter your email address here" />
				</div>
				<div class="col-md-3">
					<submit class="btn btn-danger btn-group-justified syllabus" name="submit">Learn More&nbsp;<i class="fa fa-angle-double-right"></i>
				</div>
			</form>
  		</div>
  	</section>

  	<section class="footer">
  		<h4>&#169 <a href="http://www.codifyacademy.com" target="_blank">Codify Academy</a> <script>document.write(new Date().getFullYear());</script></h4>
  	</section>

  </body>

<?php
include('footer.php');
?>
