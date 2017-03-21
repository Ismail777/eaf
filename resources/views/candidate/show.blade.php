@extends ('Main')


<title>El-fresco| {{$candidate->name }}</title>

@section ('content')



<div class="row">	
	<div class="col-md-6">
			<h1>{{$candidate->name }} </h1>
		<p class="lead"> Preffred Outlet choice: {{$candidate->position->pre_outlet }} </p> 
	</div>
	<div class="col-md-12">
			<h3 style="margin: 20px;"> Personal Information </h3>
			<table class="table">
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
			<h3 style="margin: 20px;">Position and Interview Information</h3>
			<table>
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
			<h3 style="margin: 20px;">Education Information</h3>
			<table>
				<thead>
					<th>School/University</th>
					<th>Starting date</th>
					<th>End date</th>
					<th>Certificate obtained</th>
					<th>CGPA or Equevilant</th>
				</thead>
				<tbody>
					<td>{{$candidate->education->school}}</td>
					<td>{{$candidate->education->start_date}}</td>
					<td>{{$candidate->education->end_date}}</td>
					<td>{{$candidate->education->cert}}</td>
					<td>{{$candidate->education->cgpa}}</td>
				</tbody>
			</table>
			<h3 style="margin: 20px;">Employment Information</h3>
			<table>
				<thead>
					<th>Company</th>
					<th>Job Title</th>
					<th>Previous Salary</th>
					<th>Starting Date</th>
					<th>End Date</th>
					<th>Leave Reason(s)</th>
				</thead>
				<tbody>
					<td>{{$candidate->employment->company}}</td>
					<td>{{$candidate->employment->job_title}}</td>
					<td>{{$candidate->employment->ex_salary}}</td>
					<td>{{$candidate->employment->start_date}}</td>
					<td>{{$candidate->employment->end_date}}</td>
					<td>{{$candidate->employment->leave_reason}}</td>
				</tbody>
			</table>
	</div>
</div>
			

@endsection