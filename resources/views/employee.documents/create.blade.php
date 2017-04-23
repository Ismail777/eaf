@extends ("Main")
@section ('content')


<h3>El-fresco Employee Database</h3>
<h5>Welcome, {{$employee->name}}</h5>
<div class="row">	
	{!! Form::model ($employee, ['route' => ['employeeDocuments.store',$employee->id], 'method'=>"POST", 'files'=> true ]) !!}	

	<div class="col-md-8">
{{Form::label ('staff_number', 'Staff Number:')}}
{{Form::text('staff_number', null, array ("class" => 'form-control input-lg')) }}
<br>
<h5> Immediate Family Members Details: <i>Maklumat Ahli Keluarga Anda</i></h5>

{{form::label ('grandparents','Grandfather, Grandfather In Law, Grandmother and Grandmother In Law)')}}
{{Form::textarea('grandparents', null, array ("class" => 'form-control')) }}

{{form::label ('parents_siblings','Father, Father In Law, Mother, Mother In Law, Spouse (If any) and Child Name (If any)')}}
{{Form::textarea('parents_siblings', null, array ("class" => 'form-control')) }}

{{Form::label ('employee_image','Upload A Passport Sized Photo')}}
{{Form::File ('employee_image')}}

{!! Form::close()!!}












@endsection