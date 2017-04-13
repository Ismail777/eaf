@include ('partials.head')
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="/assets/css/animate.min.css" rel="stylesheet" />
<link href="/assets/css/style.min.css" rel="stylesheet" />
<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
<link href="https://fonts.googleapis.com/css?family=Bitter|Bree+Serif|Crete+Round|Josefin+Slab" rel="stylesheet">

</head>
  <body>
   @include ('partials._nav')

   <div class="container">
	@include ('partials._messages')
    @yield ('content')

  </div> <!--end of container-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="assets/plugins/pace/pace.min.js"></script>
   
 @yield('scripts')

@include ('partials._footer');
 </body>

</html>