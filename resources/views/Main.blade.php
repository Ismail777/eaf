@include ('partials._head')
  <body>
   @include ('partials._nav')
   
   <div class="container">

	@include ('partials._messages')

    @yield ('content')

  </div> <!--end of container-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/moment.js"></script>
 

@include ('partials._footer')
@yield('scripts')
 </body>
 </html>

