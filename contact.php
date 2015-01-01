<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codify Academy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon.ico">
    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,300,700' rel='stylesheet' type='text/css'> 
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template Styles -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/colors/turquoise.css">    
  <!-- Layer Slider -->
  <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">

  
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older browsers -->
  <!--[if lt IE 9]>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  <script src="js/phone.js"></script>
  <script src="js/modernizr.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53329041-1', 'auto');
    ga('send', 'pageview');

  </script>
  </head>
<!--   <div class="topbar clearfix">
    <div class="container">
    <div class="col-lg-12 text-right">
              <div class="social_buttons">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
              </div>
    </div>
    </div>
  </div> -->

  <header class="header">
    <div class="container">
        <div class="site-header clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12">                  
                  <div id="nav" class="right">
                    <div class="site-title nav-left" id="title">
                      <a href="index.php" title="">
                          <h4>Codify <span>Academy</span></h4>  
                      </a>
                    </div>
                      <div class="container clearfix navbar-right">
                      <ul id="jetmenu" class="jetmenu blue">
                          <li><a href="index.php">Home</a>
                          </li>
                          <li><a href="thecourse.php">The Course</a> 
                          </li>
                          <li><a href="apply.php">Apply</a>
                          </li>
                          <li><a href="faq.php">FAQ</a>
                          </li>
                          <li class="active"><a href="contact.php">Contact</a>                              
                          </li>
                      </ul>
                      </div>
                  </div>  
              </div>
          </div><!-- site header -->
    </div><!-- end container -->
  </header><!-- end header -->
<body>
  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to reach out</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container contactfooter">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="well well-sm">
                <form method="post" action="mail.php">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="name">
                                  Name
                              </label>
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input name="contactname" type="text" class="form-control" id="name" placeholder="Enter Name" required="required" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input name="contactemail" type="email" class="form-control" id="email" placeholder="Enter Email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="name">
                                  Type Your Message</label>
                              <textarea style="padding:5px" name="contactmessage" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="What's on your mind today?"></textarea>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <button type="submit" name="submit" class="button large ls-l btn-group-justified" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
          <form>
            <legend style="color:#1abc9c;"><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Codify <span style="color: #1abc9c;">Academy</span></strong><br>
                25 Broadway<br>
                Manhattan, NY 10004<br>
                <a href="tel:5185214189"><i class="fa fa-phone"></i> (518) 521-4189</a>      
            </address>
            <address>
                <strong>Codify <span style="color: #1abc9c;">Academy</span></strong><br>
                156 2nd St<br>
                San Francisco, CA 94105 <br>
                <a href="tel:5185214189"><i class="fa fa-phone"></i> (518) 521-4189</a>
            </address>
            <address>
                <strong>Sam Brody - Industry Mentor</strong><br>
                <a href="mailto:sambrody@codifyacademy.com">sambrody@codifyacademy.com</a>
            </address>            
            <address>
                <strong>Matt Brody - Student Mentor</strong><br>
                <a href="mailto:mattbrody@codifyacademy.com">mattbrody@codifyacademy.com</a>
            </address>
            <address>
                <strong>Chris Brody - Student Mentor</strong><br>
                <a href="mailto:chrisbrody@codifyacademy.com">chrisbrody@codifyacademy.com</a>
            </address>
          </form>
        </div>
    </div>
</div>

  <?php include('footer.php');?>

</body>
</html>