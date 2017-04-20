@extends ('Main')
<head>
<title>Employment Application</title>
</head>


@section ('content')

	<h1>Fresco Employment Application Form</h1><br>

  <div class="container-bar">
    <ul class="progressbar">
      <li class="active">Personal Details</li>
      <li>Position</li>
      <li>Education</li>
      <li>Emloyment History</li>
      <li>Declarations</li>
    </ul>
  </div>


	<h3>1. Personal details:</h3>
	
{!! Form::open(['action' => 'personalInfoController@store' , 'data-parseley-validate'=> '']) !!} 

<div class="form-horizontal">
    
     <div class="form-group">
     <label class="col-md-3 control-label">*1. Name (As appears in your NRIC):</label>
     <div class="col-md-9">
    {{form::text ('name', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-3 control-label">*2. NRIC No:</label>
      <div class="col-md-9">
  	{{form::text ('nric', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5'))}}
      </div>
    </div>


     <div class="form-group">
  	{{form::label ('address', '*3. Address:' ,['class'=>'col-md-3 control-label'] )}}
     <div class="col-md-9">
  	{{form::text ('address', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}
    </div></div>

    <div class="form-group">
  	{{form::label ('mobile_no', '*4. Mobile Number:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
  	{{form::text ('mobile_no', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}
    </div></div>


    <div class="form-group">
  	{{form::label ('email', '*5. E-mail Address:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
  	{{form::text ('email', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}
    </div></div>
	

    <div class="form-group">
  	{{form::label ('birthday', '*6. Birthday:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
  	{{form::date ('birthday', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}
    </div></div>


    <div class="form-group">
  	{{form::label ('epf', '7. EPF Number:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
  	{{form::text ('epf', null, array('class' => 'form-control','maxlength'=>'255')) }}
    </div></div>

    <div class="form-group">
  	{{form::label (' gender', '*8. Gender:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
  	<select class="form-control" name="gender" >
  		<option value="male">Male </option>
  		<option value="female">Female </option>
  	</select>
    </div>
    </div>
	

  <div class="form-group">
	{{form::label (' martial_status', '*9. Martial status:',['class'=>'col-md-3 control-label'])}}
   <div class="col-md-9">
  	<select class="form-control" name="martial_status" >
  		<option value="single">Single </option>
  		<option value="married">Married </option>
  		<option value="divorsed">divorsed </option>
  	</select>
    </div>
    </div>


	 <div class="form-group">
  	{{form::label ('spouse_occupation_status', '*10. If married, is your spouse currently working?',['class'=>'col-md-3 control-label'])}}
       <div class="col-md-9">
    	<select class="form-control" name="spouse_occupation_status" >
      <option value="yes">Yes </option>
      <option value="no">No </option>
    </select>
      </div>
    </div>


   <div class="form-group">
    {{form::label ('spouse_occupation', '11. If yes, what is the spouse occupation and where?',['class'=>'col-md-3 control-label'])}}
       <div class="col-md-9">
      {{form::text ('spouse_occupation', null, array('class' => 'form-control', 'maxlength'=>'255')) }}
      </div>
    </div>


    <div class="form-group">
         <label class="col-md-3 control-label">12. Number of kids and their age, if any:     </label>
       <div class="col-md-9">
    	{{form::text ('kids_no', null, array('class' => 'form-control', 'maxlength'=>'255')) }}
      </div>
    </div>
  
  <div class="form-group">
	{{form::label (' birth_country', '*13. Country of birth:',['class'=>'col-md-3 control-label'])}}
   <div class="col-md-9">
  	<select class="form-control" name="birth_country" >
  		<option value="malaysia">Malaysia </option>
  		<option value="indonesia">Indonesia </option>
  		<option value="nepal">Nepal </option>
  		<option value="other">Other </option>
  	</select>
    </div></div>

  <div class="form-group">
	{{form::label ('citizenship', '*14. Citizenship:',['class'=>'col-md-3 control-label'])}}
   <div class="col-md-9">
	<select class="form-control" name="citizenship" >
  		<option value="malaysia">Malaysia </option>
  		<option value="indonesia">Indonesia </option>
  		<option value="nepal">Nepal </option>
  		<option value="other">Other </option>
  	</select>
    </div></div>


    <div class="form-group">
  	{{form::label ('religion', '*15. Religion:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
	<select class="form-control" name="religion" >
  		<option value="islam">Islam </option>
  		<option value="indonesia">Indonesia </option>
  		<option value="nepal">Nepal </option>
  		<option value="other">Other </option>
  	</select>
  </div></div>

    <div class="form-group">
  	{{form::label ('race', '*16. Race:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
	<select class="form-control" name="race" >
  		<option value="malay">Malay </option>
  		<option value="chinese">Chinese </option>
  		<option value="indian">Indain </option>
  		<option value="other">Other </option>
  	</select>
    </div></div>

</div>
  	 {{form::submit ('Next Page', array ('class' => 'btn btn-success btn-lg btn-block	' ))}}


  	<h3 style="color: red;">* Fields are mandatory </h3>



  		


{!! Form::close() !!}


@endsection 