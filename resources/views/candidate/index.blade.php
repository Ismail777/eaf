@extends ('Main')

<head><title>El-Fresco | All Candidates</title></head>

@section ('content')

	<div class="row">
	  <div class="col-md-6"> <h1>All Candidates</h1> </div>
	</div>
	<div class="col-md-6">
		{!! Form::open(['method'=>'GET', 'route'=>'candidate.search']) !!}
		<input type="text" name="search" class="form-control" placeholder="Search..">
	
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			<button type="submit" class="btn btn-success btn-lg"></button>
			
		</span>
		{!! Form::close() !!}
	</div>


	<div class="row">
		<div class="col-md-12">
			<table class="table">
		 	 <thead>
		 	 	<th>#</th>
		 	 	<th>Name</th>
		 	 	<th>Outlet</th>
		 	 	<th>NRIC</th>
		 	 	<th>Position</th>
		 	 	<th>Record Created at</th>
		 	 	<th>Outcome</th>
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
		 	 	<td><a href="{{route('outcome.show', $candidate->id)}}" class="btn btn-primary">  View Outcome </a></td>

		 	 	</tr>

		 	 	@endforeach

		 	 </tbody>
			</table>
		</div>	
	</div>


@endsection