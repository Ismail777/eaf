@extends ("Main")
<head><title>Fresco EAF | Declarations </title></head>

@section ('content')


	<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">4. Declarations:</h2>
	
{!! Form::open(['action' => 'DeclarationController@store' , 'data-parseley-validate'=> '']) !!} 

<div class="form-horizontal">

<div class="form-group">
                                    <label class="col-md-4 control-label">Auto Close Datepicker</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="datepicker-autoClose" placeholder="Auto Close Datepicker" />
                                    </div>
                                </div>

    <div class="form-group">
    {{form::label ('employed_by_fresco', '* 1. Have you previously applied or was employed by the Fresco or Jaya Grocer?',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    <select class="form-control" name="employed_by_fresco" >
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>


    <div class="form-group">
    {{form::label ('relatives_in_fresco', '*2. Do you have any relatives or friends working in Fresco?',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
    <select class="form-control" name="relatives_in_fresco" >
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>

    <div class="form-group">
  	{{form::label ('relative_name', 'If so, what is the name of your relative/friend?',['class'=>'col-md-3 control-label']) }}
    <div class="col-md-9">
  	{{form::text('relative_name', null, array('class' => 'form-control', 'maxlength'=>'255')) }}
    </div></div>

    
    <div class="form-group">
  	{{form::label('food_cert','3. Do you have a Food Handling Certificate?',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	<select class="form-control" name="food_cert">
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>



    <div class="form-group">
  	{{form::label('food_cert_date','If Yes, when did you take it?',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text('food_cert_date', null, array('class' => 'form-control', 'maxlength'=>'255') )}}
    </div></div>


    <div class="form-group">
  	{{form::label ('typhoid', '*4.Have you previously taken typhoid injection?',['class'=>'col-md-3 control-label']) }}
    <div class="col-md-9">
  	  <select class="form-control" name="typhoid">
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>


    <div class="form-group">
  	{{form::label('typhoid_date','If Yes, when did you take it?',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text('typhoid_date', null, array('class' => 'form-control', 'maxlength'=>'255') )}}
    </div></div>

    <div class="form-group">
  	{{form::label ('phy_disability', '* 5. Do you have any physical disability?',['class'=>'col-md-3 control-label']) }}
    <div class="col-md-9">
  	<select class="form-control" name="phy_disability">
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>

    <div class="form-group">
  	{{form::label('phy_disability_type','If Yes, please specify:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text('phy_disability_type', null, array('class' => 'form-control', 'maxlength'=>'255') )}}
    </div></div>


    <div class="form-group">
  	{{form::label ('illness', '* 6. Do you have any major illness/accident in the last 6 months?',['class'=>'col-md-3 control-label']) }}
    <div class="col-md-9">
  	<select class="form-control" name="illness">
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>


    <div class="form-group">
  	{{form::label('illness_type','If Yes, please specify:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text('illness_type', null, array('class' => 'form-control', 'maxlength'=>'255'))}}
    </div></div>


    <div class="form-group">
  	{{form::label ('jaya_grocer', '*7. Have you been employed by Jaya Grocer in the last 24 months? ',['class'=>'col-md-3 control-label']) }}
    <div class="col-md-9">
  	<select class="form-control" name="jaya_grocer">
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>


    <div class="form-group">
  	{{form::label('fresco','*8. Have you been employed by Fresco in the last 12 months?',['class'=>'col-md-3 control-label'] ) }}
    <div class="col-md-9">
  	<select class="form-control" name="fresco">
  		<option value="yes">Yes </option>
  		<option value="no">No </option>
  	</select>
    </div></div>

</div>

  	{{form::submit ('Next Page', array ('class' => 'btn btn-success btn-lg btn-block	' ))}}


  	<h3 style="color: red;">* Fields are mandatory </h3>


	{!! Form::close() !!}


@endsection 







