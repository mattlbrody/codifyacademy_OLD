<?php include('header.php') ?>

  <body>
    <!-- Top Navigation & Logo -->
    <nav class="navbar navbar-fixed-top">
      
    </nav>
    <div class="container-fluid">
      <!-- How Much to Spend -->
      <div class="">
        <div class="amount">
          <h2>I want to spend...</h2>
          <ol id="amount_selectable" class="list-unstyled">
            <li class="ui-state-default ui-selected">$1</li>  
            <li class="ui-state-default">$2</li>   
            <li class="ui-state-default">$3</li>               
          </ol>         
        </div>
      </div>
      <!-- How Far to Travel -->
      <div class="">
        <div class="distance">
          <h2>Max travel distance...</h2>
          <ol id="distance_selectable" class="list-unstyled">
            <li class="ui-state-default ui-selected">0.5</li>  
            <li class="ui-state-default">1.0</li>   
            <li class="ui-state-default">1.5</li>               
          </ol>
          <div class="clearfix"></div>
          <h5>Distance in miles</h5>
        </div>
      </div>
      <!-- What to Eat -->
      <div class="">
        <div class="food">
          <h2>I want to eat...</h2>
          <div class="input-group input-lg">
            <input class="form-control" type="text" placeholder="Item, Restaurant, Food">
            <a href="#" class="input-group-addon"><i class="fa fa-search fa-2x"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- Find Food Button -->
      <div class="">
        <div class="find">
          <a class="btn" href="finder.php">Find Food</a>
        </div>
      </div>
    </div>
  </body>
  	
  <?php include('footer.php') ?>
  <!-- Add any needed js after this -->

</html>
