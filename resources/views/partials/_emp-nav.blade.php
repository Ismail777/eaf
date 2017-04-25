
  <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" ><img src="https://siva.jsstatic.com/my/100125/images/logo/100125_logo_0_81232.png" alt="logo" height="30" width="70"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" style="color: white" >
            <li {{ Request::is('/')? 'class=active':'' }}> <a href="/">Home</a></li>
            <li {{ Request::is('personal/create')? 'class=active':'' }}> <a href="/personal/create">Join El-fresco</a></li>
          </ul>

           <ul class="nav navbar-nav navbar-right">

            @if (Auth::check()) 
            <p class="navbar-text lead"> Hello, {{Auth::user()->name}}</p>

                    <li role="separator" class="divider"></li>

                   <li style="margin-top: 10px;">{{ Form::open(array('route' => 'logout'), ['method'=>'POST', 'style'=>'display:none;']) }}
                   {{ Form::submit('Logout',['class'=>'btn btn-warning']) }} </form> {{ Form::close () }}</li>

          @else  
           <a style="margin-top: 7px;" href="{{route ('admin') }}" class="btn btn-default" >Admins Login </a> 
          @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>