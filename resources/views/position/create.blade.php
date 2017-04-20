@extends ("Main")
<head><title>Fresco EAF | Position </title>
</head>

@section ('content')


	<h1>Fresco Employment Application Form</h1>


  <div class="container-bar">
    <ul class="progressbar">
      <li >Personal Details</li>
      <li class="active">Position</li>
      <li>Education</li>
      <li>Emloyment History</li>
      <li >Declarations</li>
    </ul>
  </div>


	<h3>1. Position details:</h3>
	
{!! Form::open(['action' => 'PositionController@store' , 'data-parseley-validate'=> '']) !!} 
    

<div class="form-horizontal">


    <div class="form-group">
  	{{form::label ('position', '*1. Position Applied For:',['class'=>'col-md-3 control-label'])}}
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
  	{{form::label ('pre_date', '*2. Earliest Available Date/Preffrered Start Date:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::date ('pre_date', null, array('class' => 'form-control', 'required' =>'','placeholder'=>'MM/DD/YYYY')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('pre_outlet', '3. Preffered Outlet:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text ('pre_outlet', null, array('class' => 'form-control')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('salary', '*4. Expected Salary(RM):',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text ('salary', null, array('class' => 'form-control', 'required' =>'')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('source', '*5.  How did you hear about us? :',['class'=>'col-md-3 control-label'])}}<br>
    <div class="col-md-9">
  	{{Form::radio('source', 'JobStreet Advertisment')}}JobStreet Advertisment <br>
  	{{Form::radio('source', 'Outlet Posters')}}Outlet Posters <br>
  	{{Form::radio('source', 'Newspaper Advertisment')}}Newspaper Advertisment <br>
  	{{Form::radio('source', 'Walk-In')}}Walk-In <br>
  	{{Form::radio('source', 'Recommended by a friend')}}Recommended by a friend <br>
    </div></div>

    <div class="form-group">
  	{{form::label ('recommend_name', '6.  If recommended by friend, what is the name of your friend and which outlet is he/she working at? :',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text('recomment_name', null, ['class'=>'form-control'])}}
    </div></div>

</div>

    
         <a href="{{route('personal.create')}}" class="btn btn-lg btn-success"><b>Previous Page</b></a>
    {{form::submit ('Next Page', array ('class' => 'btn btn-success btn-lg btn-lg ' ))}}
     
   

  	<h3 style="color: red;"> *Fields are mandatory </h3>

@endsection