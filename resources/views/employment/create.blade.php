@extends ('Main')

<head><title>Fresco Employment Application</title></head>

@section ('content')

		<h1>Fresco Employment Application Form</h1>


<div class="row">
  <div class="col-md-7">
  <div class="container-bar">
    <ul class="progressbar">
      <li>Personal Details</li>
      <li>Position</li>
      <li>Education</li>
      <li class="active">Emloyment History</li>
      <li >Declarations</li>
    </ul>
  </div></div></div>

	<h2>4. Employment details:</h2>

   <a href="{{route('employment.create2')}}" class="btn btn-default btn-block btn-lg">Add a second employment record</a>
        <br><br>
	
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
    {{form::text ('start_date', null, array('id'=>'date','class' => 'form-control', 'required' => '', 'date')) }}
    </div></div>

<div class="form-group">
	{{form::label ('end_date', '*4. End Date/Tempoh Tamat:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::text ('end_date', null, array('id'=>'date','class' => 'form-control', 'required' => '' , 'date')) }}
    </div></div>


    <div class="form-group">
	{{form::label ('leave_reason', '*4. Reason For Leaving/Alasan Berhenti Kerja:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::text ('leave_reason', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255')) }}
    </div></div>

</div>
       
          <a href="{{route('education.create')}}" class="btn btn-lg btn-success"><b>Previous Page</b></a>
      	 {{form::submit ('Next Page', array ('class' => 'btn btn-success btn-lg' ))}}

      	<h3 style="color: red;">* Fields are mandatory <br> *Please go through all the steps in the correct order </h3>

{!! Form::close () !!}

@endsection

@section ('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 <script>
    $(document).ready(function(){
      var date_input=$('input[id="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
@endsection