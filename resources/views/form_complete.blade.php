@extends ('Main')

<head><title>Thank you {{$candidate->name}}</title></head>

@section ('content')

<div class="jumbotron">
	<h1>Thank you for completing the EAF!</h1>
	<p>Our employees will contact you soon for further instruction...</p>
</div>

	<div class="row">
		<div class="col-md-5-offset4">
		<p>
		{{Form::open (['action' => ['EmailsController@postProfile',$candidate->id] ,'method'=>'POST' ])}}
		
		{{Form::submit ('Click here to email you a summary of your application',['class'=>'btn btn-lg btn-success'])}}
		{{Form::close()}}
		</p>

		</div>
	</div>

@endsection