@extends ('Main')

<head><title>Employment Application</title></head>

@section ('content')

		<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">4. Employment details:</h2>
	
{!! Form::open(['action' => 'EmploymentController@store' , 'data-parseley-validate'=> '']) !!} 
    
    <h3>1. COMPANY (MOST RECENT or CURRENT COMPANY) /<i> SYARIKAT (SYARIKAT TERKINI atau SEMASA)</i></h3><br>

<div class="form-horizontal">

    <div class="form-group">
    {{form::label ('company', '*1. Company Name/Nama Syarikat:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::text ('company', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}
    </div></div>

    <div class="form-group">
    {{form::label ('job_title', '*2. Job Title/ Jawalan:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::text ('job_title', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}
    </div></div>

    <div class="form-group">
	{{form::label ('ex_salary', '*3. Salary/Gajl:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::text ('ex_salary', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}
    </div></div>

    <div class="form-group">
    {{form::label ('start_date', '*4. Start Date/Tempoh Mula:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::date ('start_date', null, array('class' => 'form-control', 'required' => '', 'date')) }}
    </div></div>

    <div class="form-group">
	{{form::label ('end_date', '*4. End Date/Tempoh Tamat:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::date ('end_date', null, array('class' => 'form-control', 'required' => '' , 'date')) }}
    </div></div>


    <div class="form-group">
	{{form::label ('leave_reason', '*4. Reason For Leaving/Alasan Berhenti Kerja:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::text ('leave_reason', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255')) }}
    </div></div>

</div>
        <a href="{{route('employment.create2')}}" class="btn btn-default btn-block">Add a second employment record</a>

      	 {{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block	' ))}}

      	<h3 style="color: red;">* Fields are mandatory </h3>

{!! Form::close () !!}

@endsection