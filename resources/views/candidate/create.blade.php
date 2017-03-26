@extends ('Main')
<head><title>Employment Application</title></head>

@section ('content')

	<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">1. Personal details:</h2>
	
{!! Form::open(['action' => 'personalInfoController@store' , 'data-parseley-validate'=> '']) !!} 
    
    {{form::label ('name', '*1. Name (As appears in your NRIC):')}}
    {{form::text ('name', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'255' )) }}

  	{{form::label ('nric', '*2. NRIC No:')}}
  	{{form::text ('nric', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5'))}}


  	{{form::label ('address', '*3. Address:')}}
  	{{form::text ('address', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}

  	{{form::label ('mobile_no', '*4. Mobile Number:')}}
  	{{form::text ('mobile_no', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}

  	{{form::label ('email', '*5. E-mail Address:')}}
  	{{form::text ('email', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}
	

  	{{form::label ('birthday', '*6. Birthday:')}}
  	{{form::date ('birthday', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=>'255','minlength'=>'5')) }}

  	{{form::label ('epf', '7. EPF Number:')}}
  	{{form::text ('epf', null, array('class' => 'form-control','maxlength'=>'255')) }}


  	{{form::label (' gender', '*8. Gender:')}}
  	<select class="form-control" name="gender" >
  		<option value="male">Male </option>
  		<option value="female">Female </option>
  	</select>
	
	{{form::label (' martial_status', '*9. Martial status:')}}
  	<select class="form-control" name="martial_status" >
  		<option value="single">Single </option>
  		<option value="married">Married </option>
  		<option value="divorsed">divorsed </option>
  	</select>

	
  	{{form::label ('spouse_occupation', '10. If married, what is he spouse occupation and where?')}}
  	{{form::text ('spouse_occupation', null, array('class' => 'form-control', 'maxlength'=>'255')) }}


  	{{form::label (' kids_no', '11. Number of kids and their age, if any:')}}
  	{{form::text ('kids_no', null, array('class' => 'form-control', 'maxlength'=>'255')) }}

	{{form::label (' birth_country', '*12. Country of birth:')}}
  	<select class="form-control" name="birth_country" >
  		<option value="malaysia">Malaysia </option>
  		<option value="indonesia">Indonesia </option>
  		<option value="nepal">Nepal </option>
  		<option value="other">Other </option>
  	</select>

	{{form::label ('citizenship', '*13. Citizenship:')}}
	<select class="form-control" name="citizenship" >
  		<option value="malaysia">Malaysia </option>
  		<option value="indonesia">Indonesia </option>
  		<option value="nepal">Nepal </option>
  		<option value="other">Other </option>
  	</select>

  	{{form::label ('religion', '*14. Religion:')}}
	<select class="form-control" name="religion" >
  		<option value="islam">Islam </option>
  		<option value="indonesia">Indonesia </option>
  		<option value="nepal">Nepal </option>
  		<option value="other">Other </option>
  	</select>

  	{{form::label ('race', '*15. Race:')}}
	<select class="form-control" name="race" >
  		<option value="malay">Malay </option>
  		<option value="chinese">Chinese </option>
  		<option value="indian">Indain </option>
  		<option value="other">Other </option>
  	</select>

  	 {{form::submit ('Next Page', array ('class' => 'btn btn-success btn-lg btn-block	' ))}}


  	<h3 style="color: red;">* Fields are mandatory </h3>



  		


{!! Form::close() !!}


@endsection 