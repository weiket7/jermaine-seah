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
  <script src="{{asset('js/jquery.min.js') }}"></script>
  <link href="{{URL::to('/')}}/css/bootstrap.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/css/admin-custom.css" rel="stylesheet">
</head>       
<body>
  <div class='container'>

  <ul class="pagination">
    <li>{{HTML::link('/', 'Home')}}</li>
    <li>{{HTML::link('admin/post', 'Post')}}</li>
    <li>{{HTML::link('admin/slider', 'Slider')}}</li>
  </ul>

  @if(Session::has('msg'))
    <div class="alert alert-success ">
      {{ Session::get('msg') }}
    </div>
  @endif

  @yield('content')

  </div>

  <!-- JavaScripts -->
  <script type="text/javascript" src="{{URL::to('/')}}/js/jquery.min.js"></script>                                                     
  <script type="text/javascript" src="{{URL::to('/')}}/js/bootstrap.js"></script>  
                                      
  <script src="{{asset('js/jquery.validate.min.js') }}"></script>
</body>
</html>
