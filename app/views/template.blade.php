<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
  <!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>jermaine-seah.com - News about property market, new launches and infrastructure</title>
  <meta name="description" content="REPRINT - responsive magazine HTML template by entiri">
  <meta name="keywords" content="REPRINT, entiri, theme, template, store, eshop, shop, unique, multipurpose, sliders, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon" type="image/png">

  <!-- Bootstrap -->
  <link href="{{URL::to('/')}}/css/bootstrap.css" rel="stylesheet">

  <!-- Magnific Popup -->
  <link href="{{URL::to('/')}}/css/magnific-popup.css" rel="stylesheet"> 

  <!-- Animate -->    
  <link href="{{URL::to('/')}}/css/animate.css" rel="stylesheet">

  <!-- Font Awesome Style -->
  <link href="{{URL::to('/')}}/css/font-awesome.min.css" rel="stylesheet">

  <!-- Typicons Style -->
  <link href="{{URL::to('/')}}/css/typicons.min.css" rel="stylesheet">

  <!-- Base MasterSlider style sheet -->
  <link href="{{URL::to('/')}}/masterslider/style/masterslider.css" rel="stylesheet">
   
  <!-- MasterSlider default skin -->
  <link href="{{URL::to('/')}}/masterslider/skins/metro/style.css" rel="stylesheet">
  
  <!-- Styles -->
  @if(strtolower(Request::segment(1)) == 'admin')
    {{ "<link href='".URL::to('/')."/css/admin.css' rel='stylesheet'>" }}
  @else
    {{ "<link href='".URL::to('/')."/css/styles.css' rel='stylesheet'>" }}
  @endif
  
  <link href="{{URL::to('/')}}/css/custom.css" rel="stylesheet">

  <!-- Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->   

  <script src="{{URL::to('/')}}/js/modernizr.js"></script>
</head>       
<body>

  <!-- Header -->
  <header> 
  
    <!-- <div class="top-bar hidden-sm hidden-xs">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12">
          
            <h5>Breaking News</h5>
            <p>Vestibulum volutpat pretium libero. Praesent adipiscing. Praesent vestibulum dapibus nibh.</p>
            
            <div class="social">
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-dropbox"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
            </div> 
            
          </div>
        </div>    
      </div>  
    </div> -->
    
    <!-- Nav -->
    <nav class="navbar" role="navigation">
      <div class="navbar-inner">
        <div class="container"> 
        
          <!-- Logo -->  
          <div class='row'>
            <div class='col-md-12'>                     
              <a href="{{URL::to('/')}}"><span class='logo'><b>jermaine-seah</b></span></a>


              <ul class="nav navbar-nav" id="nav">
                <li class="selected">{{link_to('/', 'Home')}}</a>
                <li>{{link_to('property-market', 'Property Market')}}</a>
                <li>{{link_to('new-launches', 'New Launches')}}</a>
                <li>{{link_to('infrastructure', 'Infrastructure')}}</a>
                <li>{{link_to('contact', 'Contact')}}</a>
              </ul>
            </div>
            
          </div>
          
        </div> 
      </div>  
    </nav>
    <!-- Nav End -->

  </header>
  <!-- Header End -->
   
  @yield('content')
 
  <div class="space40"></div> 

  <!-- Footer -->  
  <footer class="footer">
    
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <p>© 2014 JERMAINE-SEAH.COM, DEVELOPED BY WEI KET</p>
          </div>
          <!-- <div class="col-md-8 col-sm-8">     
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="components.html">Features</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
            <a href="#" class="back-to-top"><span></span></a> 
          </div> -->
        </div>
      </div>  
    </div>
  </footer> 
  <!-- Footer End -->  

  <!-- JavaScripts -->
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.min.js"></script>                                                      
  <script type="text/javascript" src="{{URL::to('/')}}/js/bootstrap.js"></script>  
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.easing.js"></script>  
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.sticky.js"></script> 
  <script type="text/javascript" src="{{URL::to('/')}}/js/selectnav.js"></script>        
  <script type="text/javascript" src="{{URL::to('/')}}/js/animate.js"></script>
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.isotope.min.js"></script>   
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.fitvids.js"></script> 
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.magnific-popup.min.js"></script> 
  <script type="text/javascript" src="{{URL::to('/')}}/js/retina.js"></script> 
  <script type="text/javascript" src="{{URL::to('/')}}/js/respond.min.js"></script> 
  <script type="text/javascript" src="{{URL::to('/')}}/js/scale.fix.js"></script>
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.countdown.js"></script> 
  <script type="text/javascript" src="masterslider/masterslider.js"></script>  
  <script type="text/javascript" src="{{URL::to('/')}}/js/functions.js"></script> 
                                      
</body>
</html>
