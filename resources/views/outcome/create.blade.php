@extends ('Main')

<head><title>Elfresco | Candidate outcome </title></head>

@section ('content')

<h1 style="color: blue;">{{$candidate->name}}</h1>
	
	{!! Form::Open(['route'=>['outcome.store',$candidate->id],'method'=>'post'])!!}

	
  	{{form::label ('outcome', 'Candidate\'s Outcome/Decision:')}}<br>
  	{{Form::radio('outcome', 'Approved ')}}Approved  <br>
  	{{Form::radio('outcome', 'Reject ')}}Reject  <br>

	{{Form::textarea('remarks', null,['class'=>'form-control'])}}
	{{Form::submit ('Submit')}}
	
	<a href="{{route('invite.create',$candidate->id)}}" class="btn btn-primary">Invite again</a>
	{!! Form::close() !!}



@endsection