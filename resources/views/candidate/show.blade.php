@extends ('Main')


<title>El-fresco| {{$candidate->name }}</title>

@section ('content')
</div> </div>

	
	

<div class="row">	
	<div class="col-md-6 col-md-offset-1">
			<h1>Name: {{$candidate->name }} </h1>
		<p class="lead"> Preffred Outlet choice: {{$candidate->position->pre_outlet}} </p> 
		<p class="lead"> First Interview Status: 
		
		@if ($candidate->interview == null) Hasn't been set yet 
		@else {{$candidate->interview}} </p>
		@endif
		{!!Form::open (['route'=>['interview',$candidate->id],'method'=>'PUT'])!!}
		{{ Form::text ('interview',null,['class'=>'form-control','placeholder'=>'time & date'])}}
		{{ Form::submit ('Update Interview Status',['class'=>'btn btn-default'])}}
		{!! Form::close() !!}
	
	</div>

	<div class="col-md-2 ">
	<a href="{{route('candidate.index')}}" class="btn btn-default btn-block"> << Back </a>
	<a href="{{route('outcome.create',$candidate->id)}}" class="btn  btn-default btn-block"> Input Outcome </a>
	<a href="{{route('invite.create',$candidate->id)}}" class="btn btn-default btn-block"> Invite Candidate </a>
	
	<a href="{{route('candidate.edit',$candidate->id)}}" class="btn btn-default btn-block">  Edit Personal Info </a>
	<a href="{{route('pdf',$candidate->id)}}" class="btn btn-success btn-block">  Print </a>

	</div>
	<div class="col-md-9 col-md-offset-1">
			<h3> Personal Information </h3>
			<table class="table table-bordered">
		 	 <thead>
		 	 	<th>address</th>
		 	 	<th>mobile_no</th>
		 	 	<th>email</th>
		 	 	<th>birthday</th>
		 	 	<th>epf</th>
		 	 	<th>gender</th>
		 	 	<th>martial_status</th>
		 	 	<th>spouse_occupation</th>
		 	 	<th>kids_no</th>
		 	 	<th>birth_country</th>
		 	 	<th>citizenship</th>
		 	 	<th>religion</th>
		 	 	<th>race</th>
		 	 </thead>
		 	 <tbody>
		 	 	<tr>
		 	 	<th>{{$candidate->address}} </th>
		 	 	<td>{{$candidate->mobile_no}}</td>
		 		<td>{{$candidate->email}}</td>
		 	 	<td>{{$candidate->birthday }} </td>
		 	 	<td>{{$candidate->epf }} </td>
		 	 	<td>{{$candidate->gender }} </td>
		 	 	<td>{{$candidate->martial_status }} </td>
		 	 	<td>{{$candidate->spouse_occupation }} </td>
		 	 	<td>{{$candidate->kids_no }} </td>
		 	 	<td>{{$candidate->birth_country }} </td>
		 	 	<td>{{$candidate->citizenship }} </td>
		 	 	<td>{{$candidate->religion }} </td>
		 	 	<td>{{$candidate->race }} </td> 	
		 	 	</tr>

		 	 </tbody>
			</table>
			<h3>Position and Interview Information</h3>
			<table class="table table-bordered">
				<thead>
					<th>Interview time</th>
					<th>Interview date</th>
					<th>Position</th>
					<th>Preffered Starting Date</th>
					<th>Salary</th>
					<th>Found El-Fresco at?</th>
					<th>Name of the friend who recommended him/her</th>
				</thead>
				<tbody>
					<td>{{$candidate->position->int_time}}</td>
					<td>{{$candidate->position->int_date}}</td>
					<td>{{$candidate->position->position}}</td>
					<td>{{$candidate->position->pre_date}}</td>
					<td>{{$candidate->position->salary}}</td>
					<td>{{$candidate->position->source}}</td>
					<td>{{$candidate->position->recomment_name}}</td>
				</tbody>
			</table>


			<h3>Education Information</h3>
				
			<table class="table table-bordered">
				<thead>
					<th>School/University</th>
					<th>Starting date</th>
					<th>End date</th>
					<th>Certificate obtained</th>
					<th>CGPA or Equevilant</th>
				</thead>
				@foreach ($candidate->educations as $education)
				<tbody>
					<td>{{ $education->school}}</td>
					<td>{{ $education->start_date}}</td>
					<td>{{ $education->end_date}}</td>
					<td>{{ $education->cert}}</td>
					<td>{{ $education->cgpa}}</td>
				</tbody>
				@endforeach
			</table>
			


			<h3 >Employment Information</h3>
			<table class="table table-bordered">
				<thead>
					<th>Company</th>
					<th>Job Title</th>
					<th>Previous Salary</th>
					<th>Starting Date</th>
					<th>End Date</th>
					<th>Leave Reason(s)</th>
				</thead>
				@foreach ($candidate->employments as $employment)
				<tbody>
					<td>{{ $employment->company}}</td>
					<td>{{ $employment->job_title}}</td>
					<td>{{ $employment->ex_salary}}</td>
					<td>{{ $employment->start_date}}</td>
					<td>{{ $employment->end_date}}</td>
					<td>{{ $employment->leave_reason}}</td>
				</tbody>
				@endforeach
			</table>
			
	</div>
</div>
@endsection