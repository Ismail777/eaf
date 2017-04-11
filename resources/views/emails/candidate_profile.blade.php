	<style type="text/css">
		table, th,td {
			border: 1px solid black;
		}
	</style>

		<h2>Thank you for finishing fresco Employment Application form</h2><br>

			<h3>Name: {{$name }} </h1>
		<p class="lead"> Preffred Outlet choice: {{$pre_outlet}} </p> 

			<h3 style="margin: 20px;"> Personal Information </h3>
			
				<ol>
		 	 	<li>address: {{$address}}</li>
		 	 	<li> mobile_no: {{$mobile_no}} </li>
 			    <li> email: {{$email}} </li>
		 	 	<li>birthday: {{$birthday}}</li>
		 	 	<li>epf: {{$epf }} </li>
		 	 	<li>gender: {{$gender }}</li>
		 	 	<li>martial_status: {{$martial_status }}</li>
		 	 	<li>spouse_occupation: {{$spouse_occupation }}</li>
		 	 	<li>kids_no: {{$kids_no }}</li>
		 	 	<li>birth country: {{$birth_country }}</li>
		 	 	<li>citizenship: {{$citizenship }}</li>
		 	 	<li>religion: {{$religion }}</li>
		 	 	<li>race: {{$race }} </li>
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
					<td>{{$int_time}}</td>
					<td>{{$int_date}}</td>
					<td>{{$position}}</td>
					<td>{{$pre_date}}</td>
					<td>{{$salary}}</td>
					<td>{{$source}}</td>
					<td>{{$recomment_name}}</td>
				</tr>
			</table>

			
	
