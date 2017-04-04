@extends ('Main')
<head><title>Edit Candidate</title></head>

@section ('content')

<h3>Edit Candidate's Personal Information</h3>
<div class="row">	
	{!! Form:: model ($candidate, ['route' => ['candidate.update', $candidate ->id], 'method'=>"PUT" ]) !!}	

	<div class="col-md-8">
	{{Form::label ('name', 'Name:')}}
	{{Form::text('name', null, array ("class" => 'form-control input-lg')) }}
<br>
		{{Form::label ('nric', 'nric:')}}
	{{Form::text('nric', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('mobile_no', 'mobile_no:')}}
	{{Form::text('mobile_no', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('email', 'email:')}}
	{{Form::text('email', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('birthday', 'birthday:')}}
	{{Form::date('birthday', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('epf', 'epf:')}}
	{{Form::text('epf', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('martial_status', 'martial_status:')}}
	{{Form::text('martial_status', null, array ("class" => 'form-control input-lg')) }}
<br>
	{{Form::label ('spouse_occupation', 'spouse_occupation:')}}
	{{Form::text('spouse_occupation', null, array ("class" => 'form-control input-lg')) }}
<br>
{{Form::label ('kids_no', 'kids_no:')}}
	{{Form::text('kids_no', null, array ("class" => 'form-control input-lg')) }}
<br>
{{Form::label ('address', 'address:')}}
	{{Form::text('address', null, array ("class" => 'form-control input-lg')) }}
<br>


{{Form::submit ('Save Changes', array("class"=>'btn btn-success'))}}

@endsection