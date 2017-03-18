@extends ("Main")
<head><title>Fresco EAF | Position </title></head>

@section ('content')


	<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">1. Position details:</h2>
	
{!! Form::open(['action' => 'PositionController@store' , 'data-parseley-validate'=> '']) !!} 
    
    {{form::label ('int_time', '* 1. Interview Time:')}}
    {{form::time ('int_time', null, array('class' => 'form-control', 'required' => '')) }}

  	{{form::label ('int_date', '*2. Interview Date:')}}
  	{{form::date ('int_date', null, array('class' => 'form-control', 'required' =>''))}}


  	{{form::label ('position', '*3. Position Applied For:')}}
	
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
    </datalist> <br>
 

  	{{form::label ('pre_date', '*4. Earliest Available Date/Preffrered Start Date:')}}
  	{{form::date ('pre_date', null, array('class' => 'form-control', 'required' =>'')) }}


  	{{form::label ('pre_outlet', '5. Preffered Outlet:')}}
  	{{form::text ('pre_outlet', null, array('class' => 'form-control')) }}


  	{{form::label ('salary', '*6. Expected Salary(RM):')}}
  	{{form::text ('salary', null, array('class' => 'form-control', 'required' =>'')) }}


  	{{form::label ('source', '*7.  How did you hear about us? :')}}<br>
  	{{Form::radio('source', 'JobStreet Advertisment')}}JobStreet Advertisment <br>
  	{{Form::radio('source', 'Outlet Posters')}}Outlet Posters <br>
  	{{Form::radio('source', 'Newspaper Advertisment')}}Newspaper Advertisment <br>
  	{{Form::radio('source', 'Walk-In')}}Walk-In <br>
  	{{Form::radio('source', 'Recommended by a friend')}}Recommended by a friend <br>

  	{{form::label ('recommend_name', '8.  If recommended by friend, what is the name of your friend and which outlet is he/she working at? :')}}
  	{{form::text('recomment_name', null, ['class'=>'form-control'])}}


    {{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block ' ))}}

  	<h3 style="color: red;"> *Fields are mandatory </h3>




@endsection