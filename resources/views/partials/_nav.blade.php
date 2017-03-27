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
          <a class="navbar-brand" href="#">El-Fresco Marketing</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li {{ Request::is('/')? 'class=active':'' }}> <a href="/">Home</a></li>
            <li {{ Request::is('personal/create')? 'class=active':'' }}> <a href="/personal/create">Join El-fresco</a></li>
          </ul>

           <ul class="nav navbar-nav navbar-right">

            @if (Auth::check()) 

              <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{Auth::user()->name}} <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    <li><a href="{{route ('candidate.index') }}">Candidates</a></li>

                    <li role="separator" class="divider"></li>
                    <li>  {{ Form::open(array('route' => 'logout'), ['method'=>'POST', 'style'=>'display:none;']) }} {{ Form::submit('Logout') }} </form> {{ Form::close () }}</li>

                </ul>
               </li>
          @else  
           <a href="{{route ('admin') }}" class="btn btn-default" >Admins Login </a> 
          @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>