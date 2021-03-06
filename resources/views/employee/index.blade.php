@extends ('Main')

<head><title>El-Fresco | All Employees</title></head>

@section ('content')

	
	 <h1>All Employees</h1> 
	
	<div class="col-md-6">
		{!! Form::open(['method'=>'GET', 'route'=>'candidate.search']) !!}
				<div class="input-group">
  		  <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
			{!! Form::close() !!}
	</div>


	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped">
		 	 <thead>
		 	 	<th>#</th>
		 	 	<th>Name</th>
		 	 	<th>Position</th>
		 	 	<th>Outlet</th>		 	 	
				<th>Salary</th>
		 	 	<th>Record Created at</th>
		 	 </thead>
		 	 <tbody>
		 	 	@foreach ($employees as $employee)
		 	 	<tr>
		 	 	<th>{{$employee->id}} </th>
		 	 	<td>{{$employee->name}}</td>
		 		<td>{{$employee->position}}</td>
		 		<td>{{$employee->outlet}}</td>
		 	 	<td>{{$employee->salary}} </td>
		 	 	<td>{{ date ( 'jS, M,y  G:i' , strtotime ($employee->created_at) )}}</td>
		 	 	<td><a href="{{route('employee.show', $employee->id) }}" class="btn btn-default"> View employee</a></td>

		 	 	<td><a href="{{route('approvalMail', $employee->id) }}" class="btn btn-primary"> Send Approval Mail</a></td>

		 	 	@endforeach

		 	 </tbody>
			</table>
		</div>	
	</div>
	
	<div class ="text-center">
			{!! $employees->links() !!}
		</div>

@endsection