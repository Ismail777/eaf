
<head>
<title>Employee | {{$employee->name}}</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
@include ('partials._emp-nav')
<div class="container">
<h1 style="background-color: 50db43; color: white">ElFresco Employee Database</h1><br><br>
	<div class="row justidy-content-md-center">
		
		<h2><b>New Employees Registration Form</b></h2><br>
		<p class="lead"><b style="color: red">Note:</b><i>Clicking the submit button means that you ensure the accuracy and integrity of the information provided</i></p>

	{!! Form::model ($employee, ['route' => ['employeeDocs.store',$employee->id], 'method'=>"POST", 'files'=> true ]) !!}	

		
		<div class="form-horizontal">

	    	<div class="form-group">
			{{Form::label ('id', 'EmployeeID:',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::text('id', null, array ("class" => 'form-control input-lg')) }}
			</div>
			</div><br>

			<h3> Immediate Family Members Details: <i>Maklumat Ahli Keluarga Anda</i></h3><br>

			<div class="form-group">
			{{form::label ('grandparents','Grandfather, Grandfather In Law, Grandmother and Grandmother In Law ',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::textarea('grandparents', null, array ("class" => 'form-control','placeholder'=>'Grandfather:...  Grandmother:... etc')) }}
			</div></div>


			<div class="form-group">
			{{form::label ('parents_siblings','Father, Father In Law, Mother, Mother In Law, Spouse (If any) and Child Name (If any)',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::textarea('parents_siblings', null, array ("class" => 'form-control')) }}
			</div></div>


			<div class="form-group">
			{{Form::label ('employee_image','Upload A Passport Sized Photo',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::File ('employee_image')}}
			</div></div>

			<div class="form-group">
			{{Form::label ('education_cert','Upload Your Latest Education Certificate',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::File ('education_cert')}}
			</div></div>

			<div class="form-group">
			{{Form::label ('employment_slip','Upload A Payslip From Your Latest Job',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::File ('employment_slip')}}
			</div></div>

			<div class="form-group">
			{{Form::label ('typhoid','Upload Your Typhoid Certificate',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::File ('typhoid')}}
			</div></div>

			<div class="form-group">
			{{Form::label ('hygenic_cert','Upload Your Food Hygenic Certification',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::File ('hygenic_cert')}}
			</div></div>

			<div class="form-group">
			{{Form::label ('nric','Upload Your NRIC Document',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::File ('nric')}}
			</div></div>

			
			<div class="form-group">
			{{Form::label ('bank_info','Enter Your Bank Account Information',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::textarea ('bank_info',null, ['class'=>'form-control'])}}
			</div>
			</div>

			<div class="form-group">
			{{Form::label ('bank_statment','Upload Your Bank Statment',['class'=>'col-md-3 control-label'])}}
			<div class="col-md-9">
			{{Form::file ('bank_statment')}}
			</div></div>

			<div class="col col-md-8 col-offset-3">
			{{Form::submit ('Submit',['class'=>'btn btn-success btn-lg btn-block'])}}
			</div>
			{!! Form::close()!!}
			<br>
		</div>
	</div>
</div>














