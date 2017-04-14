@extends ("Main")
<head>
<title>Fresco EAF | Education </title>
</head>

@section ('content')


	<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">1. Education details: your most recent educations</h2>

	
	
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
    
  	<a href="{{route('education.create2')}}" class="btn btn-default btn-block">Add Another Edcuation Record</a>
  

  	{{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block ' ))}}

	{{Form::close()}}

	<h4 style="color: red"> *Fields are mandatory </h4>

	@endsection

  	



  	
