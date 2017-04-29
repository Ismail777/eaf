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
		@if ($candidate->outcome->outcome === "Approved")
    		<a href="{{route('employee.create',$candidate->id)}}" class="btn btn-lg btn-primary">Create An Employee Record</a>

    	@elseif ($candidate->outcome->outcome === "Reject")
    	<a href="{{route('rejectEmail',$candidate->id)}}" class="btn btn-lg btn-warning">Send A Rejection Email</a>
    	@endif
		</div>
	</div>
	


@endsection