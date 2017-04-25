<head>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
@include ('partials._emp-nav')
<div class="container">

	<ul>
		<li>Name: {{$edocument->employee->name}}</li>
		<img src="{{ asset("images/".$edocument->employee_image)}}" height="150" width="150">
		<li>Grandparents: {{$edocument->grandparents}}</li>

		<li>Parents And Siblings: {{$edocument->parents_siblings}}</li>

		<li>Bank Information: {{$edocument->bank_info}}</li>
		<li>Bank Statment: <a href="{{asset("storage/documents/".$edocument->bank_statment)}}">Download</a> </li>
		<li>Hygine Certification:<a href="{{asset("storage/documents/".$edocument->hygenic_cert)}}">Download</a> </li>
		<li>Typhoid Certificate: <a href="{{asset("storage/documents/".$edocument->typhoid)}}">Download</a></li>
		<li>Past Employment Slip:<a href="{{asset("storage/documents/".$edocument->employment_slip)}}">Download</a></li>
		<li>Past Education Certificate:<a href="{{asset("storage/documents/".$edocument->education_cert)}}">Download</a></li>
		<li>NRIC:<a href="{{asset("storage/documents/".$edocument->nric)}}">Download</a></li>
	</ul>