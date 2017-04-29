@extends ('Main')

<head><title>Thank you {{$candidate->name}}</title></head>

@section ('content')

<div class="jumbotron" style="background-color: #d5ffcc;">
	<h1>Thank you for completing the EAF!</h1>
	<p>Our employees will contact you soon for further instruction...</p>

	<div class="row">
		<div class="col-md-5-offset4">
		<p>
		{{Form::open (['action' => ['EmailsController@postProfile',$candidate->id] ,'method'=>'POST' ])}}
	
		<input type="submit" class="btn btn-lg btn-default" name="submit" value="E-mail me a copy of my EAF profile" onclick="this.form.submit();this.disabled=true; this.value='Sending...';">
		
		{{Form::close()}}
		</p>

		</div>
	</div>
</div>


@endsection