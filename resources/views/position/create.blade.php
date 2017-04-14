@extends ("Main")
<head><title>Fresco EAF | Position </title>
</head>

@section ('content')

<script src="jquery.datetimepicker.full.js"></script>   

	<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">1. Position details:</h2>
	
{!! Form::open(['action' => 'PositionController@store' , 'data-parseley-validate'=> '']) !!} 
    

<div class="form-horizontal">

    <div class="form-group">
    {{form::label ('int_time', '* 1. Interview Time:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    {{form::time ('int_time', null, array('class' => 'form-control', 'required' => '')) }}
    </div></div>


    <div class="form-group">
  	{{form::label (' date', '*2. Interview Date:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
     
  	{{form::date ('int_date', null, array('class' => 'form-control','placeholder'=>'MM/DD/YYYY'))}}
    </div></div>

    <div class="form-group">
  	{{form::label ('position', '*3. Position Applied For:',['class'=>'col-md-3 control-label'])}}
	   <div class="col-md-9">
     <input type="text" list="position" name="position" />
    <datalist id="position">
      <option>Service Crew (FOH)</option>
      <option>Managment Trainie (BOH) </option>
      <option>Managment Trainie (FOH)</option>
      <option>Supervisor/Assistant Supervisor</option>
      <option>Manager/Assistant Manager</option>
      <option>Outlet Manager/Assistant Outlet Manager</option>
     <option> Kitchen Crew (BOH)</option>
     <option>Others: please right down</option>
    </datalist> 
    </div></div>
 
    <div class="form-group">
  	{{form::label ('pre_date', '*4. Earliest Available Date/Preffrered Start Date:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::date ('pre_date', null, array('class' => 'form-control', 'required' =>'','placeholder'=>'MM/DD/YYYY')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('pre_outlet', '5. Preffered Outlet:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text ('pre_outlet', null, array('class' => 'form-control')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('salary', '*6. Expected Salary(RM):',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text ('salary', null, array('class' => 'form-control', 'required' =>'')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('source', '*7.  How did you hear about us? :',['class'=>'col-md-3 control-label'])}}<br>
    <div class="col-md-9">
  	{{Form::radio('source', 'JobStreet Advertisment')}}JobStreet Advertisment <br>
  	{{Form::radio('source', 'Outlet Posters')}}Outlet Posters <br>
  	{{Form::radio('source', 'Newspaper Advertisment')}}Newspaper Advertisment <br>
  	{{Form::radio('source', 'Walk-In')}}Walk-In <br>
  	{{Form::radio('source', 'Recommended by a friend')}}Recommended by a friend <br>
    </div></div>

    <div class="form-group">
  	{{form::label ('recommend_name', '8.  If recommended by friend, what is the name of your friend and which outlet is he/she working at? :',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text('recomment_name', null, ['class'=>'form-control'])}}
    </div></div>

</div>

    {{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block ' ))}}

  	<h3 style="color: red;"> *Fields are mandatory </h3>

@endsection