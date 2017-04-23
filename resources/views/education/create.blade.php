@extends ("Main")
<head>
<title>Fresco EAF | Education </title>
</head>

@section ('content')


	<h1>Fresco Employment Application Form</h1>

  
<div class="row">
  <div class="col-md-7">
  <div class="container-bar">
    <ul class="progressbar">
      <li>Personal Details</li>
      <li>Position</li>
      <li class="active">Education</li>
      <li>Emloyment History</li>
      <li >Declarations</li>
    </ul>
  </div></div></div>


	<h2>1. Education details: your most recent educations</h2>

	    
    <a href="{{route('education.create2')}}" class="btn btn-default btn-block btn-lg">Add Another Edcuation Record</a><br><br>
	
{!! Form::open(['action' => 'EducationController@store' , 'data-parseley-validate'=> '']) !!} 
      
<div class="form-horizontal">


    <div class="form-group">
    {{form::label ('school', '* 1.  School name/ Nama Sekolah:',['class'=>'col-md-3 control-label'])}}
     <div class="col-md-9">
    {{form::text ('school', null, array('class' => 'form-control', 'required' => '')) }}
    </div>
      </div>

     <div class="form-group">
  	{{form::label ('start_date', '*2. Start Date/Tempoh Mula:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::date ('start_date', null, array('class' => 'form-control', 'required' => ''))}}
    </div></div>


     <div class="form-group">
  	{{form::label ('end_date', '*3. End Date/Tempoh Tamal:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::date ('end_date', null, array('class' => 'form-control','required' => ''))}}
    </div> </div>


     <div class="form-group">
  	{{form::label ('cert', '*4. Certificate Obtained/Sijil yang Pernah Anda Dapat:',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text ('cert', null, array('class' => 'form-control','required' => ''))}}
    </div></div>


     <div class="form-group">
  	{{form::label ('cgpa', '*5. CGPA Obtained/<Gred; Pencapaian GPA (jika ada):',['class'=>'col-md-3 control-label'])}}
    <div class="col-md-9">
  	{{form::text ('cgpa', null, array('class' => 'form-control','required' => ''))}}
    </div> </div>

</div>

  
      <a href="{{route('position.create')}}" class="btn btn-lg btn-success">Previous Page</a>
  	{{form::submit ('Next Page', array ('class' => 'btn btn-success btn-lg btn-lg ' ))}}

	{{Form::close()}}

	<h4 style="color: red"> *Fields are mandatory </h4>

	@endsection

  	



  	
