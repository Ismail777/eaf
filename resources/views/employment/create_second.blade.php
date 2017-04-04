@extends ('Main')

@section ('content')
<a href="{{route('employment.create')}}" class="btn btn-lg btn-default">Back </a>

{!! Form::open(['action' => 'EmploymentController@storeSecondForm' , 'data-parseley-validate'=> '']) !!} 
    
    <h3>Add A Company Record</h3><br>
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


      	 {{form::submit ('Add', array ('class' => 'btn btn-success btn-lg btn-block	' ))}}


{!! Form::close () !!}

@endsection
