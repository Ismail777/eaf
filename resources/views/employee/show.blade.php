@extends('Main')
<head><title>Fresco | Employee:{{$employee->id}}</title></head>
<style type="text/css">
	li {
	font-family:'Bitter', serif;
	font-size: large;
}
</style>
@section ('content')

<div class="jumbotron">
	<h1>{{$employee->name}} ({{$employee->position}})</h1>
	<a href="{{route('employee-docs.show',$edocument->id)}}" class="btn btn-lg btn-primary">Go To Employee Database Page</a>
</div>

<div class="col col-md-5">

	 <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-default" style="margin-left: 25px;"><b>Edit Information</b> <i class="glyphicon glyphicon-pencil"></i></a>
<ul>
	<li>Staff Number: {{$employee->staff_number}}</li>
	<li>Salary: {{$employee->salary}}</li>
	<li>Outlet: {{$employee->outlet}}</li>
	<li>Joined On : {{ date ( 'jS, M Y ' , strtotime ($employee->created_at) )}}</li>
	<li>Candiate ID: {{$employee->candidate->id}}</li>
	<li>Phone Number : {{$employee->candidate->mobile_no}}</li>
	<li>Address: {{$employee->candidate->address}}</li>
	<li>NRIC: {{$employee->candidate->nric}}</li>
</ul>
</div>



@endsection