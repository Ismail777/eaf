@extends ('Main')

<head><title>Employment Application</title></head>

@section ('content')

		<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">4. Employment details:</h2>
	
{!! Form::open(['action' => 'EmploymentController@store' , 'data-parseley-validate'=> '']) !!} 
    
    <h3>1. COMPANY (MOST RECENT or CURRENT COMPANY) <i> SYARIKAT (SYARIKAT TERKINI atau SEMASA)</i></h3><br>
    {{form::label ('company', '*1. Company Name/Nama Syarikat:')}}
    {{form::text ('company', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}

    {{form::label ('job_title', '*2. Job Title/ Jawalan:')}}
    {{form::text ('job_title', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}

	{{form::label ('ex_salary', '*3. Salary/Gajl:')}}
    {{form::text ('ex_salary', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}

    {{form::label ('start_date', '*4. Start Date/Tempoh Mula:')}}
    {{form::date ('start_date', null, array('class' => 'form-control', 'required' => '', 'date')) }}

	{{form::label ('end_date', '*4. End Date/Tempoh Tamat:')}}
    {{form::date ('end_date', null, array('class' => 'form-control', 'required' => '' , 'date')) }}

	{{form::label ('leave_reason', '*4. Reason For Leaving/Alasan Berhenti Kerja:')}}
    {{form::text ('leave_reason', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255')) }}

    {!! Form:: close() !!}
    

    
	<h3>2. COMPANY <i>Syarikat</i> </h3> <br>
    {!! Form::open(['action' => 'EmploymentController@storeSecondForm' , 'data-parseley-validate'=> '']) !!} 
    
   	{{form::label ('company', '1. Company Name/Nama Syarikat:')}}
    {{form::text ('company', null, array('class' => 'form-control', 'maxlength'=>'255' )) }}

    {{form::label ('job_title', '2. Job Title/ Jawalan:')}}
    {{form::text ('job_title', null, array('class' => 'form-control', 'maxlength'=>'255' )) }}

	{{form::label ('ex_salary', '3. Salary/Gajl:')}}
    {{form::text ('ex_salary', null, array('class' => 'form-control', 'maxlength'=>'255' )) }}

    {{form::label ('start_date', '4. Start Date/Tempoh Mula:')}}
    {{form::date ('start_date', null, array('class' => 'form-control', 'date')) }}

	{{form::label ('end_date', '4. End Date/Tempoh Tamat:')}}
    {{form::date ('end_date', null, array('class' => 'form-control' , 'date')) }}

	{{form::label ('leave_reason', '4. Reason For Leaving/Alasan Berhenti Kerja:')}}
    {{form::text ('leave_reason', null, array('class' => 'form-control', 'maxlength'=>'255')) }}

      	 {{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block	' ))}}

      	<h3 style="color: red;">* Fields are mandatory </h3>

{!! Form::close () !!}

@endsection