<?php include('header.php') ?>

  <body>
    <!-- Top Navigation & Logo -->
    <nav class="navbar navbar-fixed-top finder">
      <a href="finder.php">
        <i class="fa fa-long-arrow-left fa-4x"></i>        
      </a>
    </nav>
    <div class="container-fluid">      
      <div class="new_search">
        <h3 class="text-center"><a href="index.php">New Search</a></h3>
      </div>
      
      <div class="col-md-12">
        <h1 class="text-center resturant_name">Fozzie Pizza</h1>
        <ul class="list-unstyled menu_items">
          <li>
            <div class="pull-left">Cheese Slice</div>
            <div class="pull-right">$1.00</div>
          </li>
          <div class="clearfix"></div>
          <li>
            <div class="pull-left">Pepperoni Slice</div>
            <div class="pull-right">$1.50</div>
          </li>
          <div class="clearfix"></div>
          <li>
            <div class="pull-left">Sicilian Cheese Slice</div>
            <div class="pull-right">$2.00</div>
          </li>
          <div class="clearfix"></div>
          <li>
            <div class="pull-left">Sicilian Pepperoni Slice</div>
            <div class="pull-right">$2.50</div>
          </li>
        </ul>
      </div>
      <ol class="finder_selectable list-unstyled">
        <li class="ui-state-default ui-selected google_map google_map_info">
          <a href="https://www.google.com/maps/preview">
            <i class="fa fa-map-marker"></i>           
          </a>
        </li>
      </ol>
      <div class="clearfix"></div>
      <h3 class="text-center">Navigate Here</h3>
    </div>
  </body>
  	
  <?php include('footer.php') ?>
  <!-- Add any needed js after this -->

</html>
