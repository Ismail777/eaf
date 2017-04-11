	<style type="text/css">
		table, th,td {
			border: 1px solid black;
		}
	</style>

			<h1>Name: {{$candidate->name }} </h1>
		<p class="lead"> Preffred Outlet choice: {{$candidate->position->pre_outlet}} </p> 

			<h3 style="margin: 20px;"> Personal Information </h3>
			
				<ol>
		 	 	<li>address: {{$candidate->address}}</li>
		 	 	<li> mobile_no: {{$candidate->mobile_no}} </li>
 			    <li> email: {{$candidate->email}} </li>
		 	 	<li>birthday: {{$candidate->birthday}}</li>
		 	 	<li>epf: {{$candidate->epf }} </li>
		 	 	<li>gender: {{$candidate->gender }}</li>
		 	 	<li>martial_status: {{$candidate->martial_status }}</li>
		 	 	<li>spouse_occupation: {{$candidate->spouse_occupation }}</li>
		 	 	<li>kids_no: {{$candidate->kids_no }}</li>
		 	 	<li>birth country: {{$candidate->birth_country }}</li>
		 	 	<li>citizenship: {{$candidate->citizenship }}</li>
		 	 	<li>religion: {{$candidate->religion }}</li>
		 	 	<li>race: {{$candidate->race }} </li>
		 		</ol>
		 	 	
		 	 	
		 	 	
		 	 	 	
		 	
			<h3 >Position and Interview Information</h3>
			<table>
				<tr>
					<th>Interview time</th>
					<th>Interview date</th>
					<th>Position</th>
					<th>Preffered Starting Date</th>
					<th>Salary</th>
					<th>Found El-Fresco at?</th>
					<th>Name of the friend who recommended him/her</th>
				</tr>
				<tr>
					<td>{{$candidate->position->int_time}}</td>
					<td>{{$candidate->position->int_date}}</td>
					<td>{{$candidate->position->position}}</td>
					<td>{{$candidate->position->pre_date}}</td>
					<td>{{$candidate->position->salary}}</td>
					<td>{{$candidate->position->source}}</td>
					<td>{{$candidate->position->recomment_name}}</td>
				</tr>
			</table>

			<h3 style="margin: 20px;">Education Information</h3>
				
			<table>
				<tr>
					<th>School/University</th>
					<th>Starting date</th>
					<th>End date</th>
					<th>Certificate obtained</th>
					<th>CGPA or Equevilant</th>
				</tr>

				@foreach ($educations as $education)
				<tr>
					<td>{{ $education['school'] }}</td>
					<td>{{ $education['start_date'] }}</td>
					<td>{{ $education['end_date']}}</td>
					<td>{{ $education['cert'] }}</td>
					<td>{{ $education['cgpa'] }}</td>
				</tr>
			</table>
			@endforeach


			<h3 style="margin: 20px;">Employment Information</h3>
			<table>
				<tr>
					<th>Company</th>
					<th>Job Title</th>
					<th>Previous Salary</th>
					<th>Starting Date</th>
					<th>End Date</th>
					<th>Leave Reason(s)</th>
				</tr>
				@foreach ($employments as $employment)
				<tr>
					<td>{{ $employment['company'] }}</td>
					<td>{{ $employment['job_title']}}</td>
					<td>{{ $employment['ex_salary']}}</td>
					<td>{{ $employment['start_date']}}</td>
					<td>{{ $employment['end_date']}}</td>
					<td>{{ $employment['leave_reason']}}</td>
				</tr>
			</table>
			@endforeach
	
