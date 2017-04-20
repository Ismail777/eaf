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
		 	 	<th>Outcome</th>
		 	 	<th>Delete</th>
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
		 	 	 <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
		 	 	</tr>
		 	 	@endforeach
		 	 </tbody>
			</table>	
	</div>



	<!-- Dialog -->
	 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
       <a href="{{route('candidate.destroy',$candidate->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes </a>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
  </div>
	<div class ="text-center">
			{!! $candidates->links() !!}
		</div>

@endsection