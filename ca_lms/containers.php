<!-- Working On Content Page -->
	<?php include('header.php') ?>
 	<body>

	  	<!-- navigation -->
	  	<?php include('navigation.php') ?>

	  	<!-- sidebar -->
	    <div class="sidebar">
	      <ul class="list-unstyled">
	        <li>
	          <a href="index.php">
	            <i class="fa fa-home fa-5x tooltips" data-toggle="tooltip" data-placement="right" title="Home"></i>
	          </a>
	          <a href="#">
	            <i class="fa fa-download fa-5x tooltips" data-toggle="tooltip" data-placement="right" title="Materials"></i>
	          </a>
	        </li>
	      </ul>
	    </div>

	    <!-- Content -->
	    <div class="container-fluid"> 
	    	<div class="course_content">
	    		<h1 class="text-center">Containers & Columns: How Containers work!</h1>
	    		<video id="video1" controls>
	    			<source src="vid.mp4" type="video/mp4">
	    		</video>
	    	</div>
	    </div>
	    <div class="container">
	    	<div class="course_content">
	    		<div class="breadcrumbs">
	    			<ol class="breadcrumb">
					  <li class="active"><a href="containers.php">How Containers Work</a></li>
					  <li><a href="columns.php" class="not_active">How Columns Work</a></li>
					  <li><a href="puzzles.php" class="not_active">Puzzles</a></li>
					</ol>
	    		</div>
	    	</div>
	    </div>



		<?php include('footer.php') ?>   

    </body>

  
</html>

