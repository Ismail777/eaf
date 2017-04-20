@extends ('Main')
<head><title>Create an Employee</title></head>

@section ('content')

<h3>Create an Employee record</h3>
<div class="row">	
	{!! Form::model ($candidate, ['route' => ['employee.store',$candidate->id], 'method'=>"POST" ]) !!}	

	<div class="col-md-8">
	{{Form::label ('staff_number', 'Staff Number:')}}
	{{Form::text('staff_number', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('name', 'Name:')}}
	{{Form::text('name', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('position_new', 'Position:')}}
	{{Form::text('position_new', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('outlet', 'Outlet:')}}
	{{Form::text('outlet', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('salary', 'Salary:')}}
	{{Form::text('salary', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::submit('Make an employee record',['class'=>'form-control btn btn-lg btn-success'])}}

{{Form::close()}}

@endsection
