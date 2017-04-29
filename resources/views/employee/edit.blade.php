@extends ('Main')
<head><title>Fresco | Edit: {{$employee->id}}</title></head>


@section ('content')

<h3>Edit Employee's Information</h3>
<div class="row">	
	{!! Form:: model ($employee, ['route' => ['employee.update', $employee->id], 'method'=>"PUT" ]) !!}	
	<div class="row">
	<div class="col-md-5">
	{{Form::label ('name', 'Name:' ,['class'=>'control-label'])}}
	{{Form::text('name', null, array ("class" => 'form-control input-lg')) }}

	{{Form::label ('position', 'Position:' ,['class'=>'control-label'])}}
	{{Form::text('position', null, array ("class" => 'form-control input-lg')) }}

	{{Form::label ('outlet', 'Outlet:' ,['class'=>'control-label'])}}
	{{Form::text('outlet', null, array ("class" => 'form-control input-lg')) }}

	{{Form::label ('salary', 'Salary:' ,['class'=>'control-label'])}}
	{{Form::text('salary', null, array ("class" => 'form-control input-lg')) }}

	{{Form::submit('Update', ['class'=>'btn btn-success btn-block'])}}

	{!! Form::close()!!}
	</div>

	<div class="col col-md-3 col-md-offset-2">
		<h3>Edit Contact Information And More...</h3>
		<a href="{{route('candidate.edit',$employee->candidate_id)}}" class="btn btn-block btn-primary">Edit Candidate Record</a>
	</div>
	</div>

@endsection