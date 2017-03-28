@extends ('Main')
<head><title>Outcome: {{$candidate->name}} </title></head>

@section ('content')
<h2>{{$candidate->name}}</h2>
	<div class="row">
		<div class="col-md-6">
			<h3>Decision/Outcome: </h3><br>
			<strong>{{$candidate->outcome->outcome}}</strong><br><br>
			<h3>Remarks:</h3><br>
			<p>{{$candidate->outcome->remarks}}</p>

		</div>
	</div>
	


@endsection