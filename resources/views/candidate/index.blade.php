@extends ('Main')

<head>
<title>El-Fresco | All Candidates</title>
</head>

@section ('content')


	
<div class="row">

	

		<div class="col-md-4">
		 <h1>All Candidates</h1> 
			{!! Form::open(['method'=>'GET', 'route'=>'candidate.search']) !!}
			<input type="text" name="search" class="form-control" placeholder="Search..">
			<span class="input-group-btn">
			<button type="submit" class="btn btn-default btn-lg btn-success">
			<i class="glyphicon glyphicon-search" ></i>
			</button>
			</span>
			{!! Form::close() !!}
		</div>



	</div>
	<div class="table-responsive">
			<table class="table table-striped table-bordred" id="mytable">
		 	 <thead>
		 	 	<th>#</th>
		 	 	<th>Name</th>
		 	 	<th>Outlet</th>
		 	 	<th>NRIC</th>
		 	 	<th>Position</th>
		 	 	<th>Created at</th>
		 	 	<th></th>
		 	 	<th></th>
		 	 	<th></th>
		 	 </thead>
		 	 <tbody>
		 	 	@foreach ($candidates as $candidate)
		 	 	<tr>
		 	 	<th>{{$candidate->id}} </th>
		 	 	<td>{{$candidate->name}}</td>
		 		<td>{{$candidate->position->pre_outlet}}</td>
		 		<td>{{$candidate->nric}}</td>
		 	 	<td>{{$candidate->position->position }} </td>
		 	 	<td>{{ date ( 'jS, M,y  G:i' , strtotime ($candidate->created_at) )}}</td>
		 	 	<td><a href="{{route('candidate.show', $candidate->id) }}" class="btn btn-default"> View Candidate</a></td>
		 	 	<td><a href="{{route('outcome.show', $candidate->id)}}" class="btn btn-default">  View Outcome </a></td>
		 	 	 <td><a href="{{route('candidate.destroy',$candidate->id)}}" class="btn btn-danger btn-lg">Delete</a></td>
		 	 	</tr>
		 	 	@endforeach
		 	 </tbody>
			</table>	
	</div>



	<div class ="text-center">
			{!! $candidates->links() !!}
		</div>

@endsection