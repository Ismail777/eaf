@extends ("Main")
<head><title>Fresco EAF | Education </title></head>

@section ('content')


	<h1 style="margin-top: 100px;">Employment Application Form</h1>
	<h2 style="margin-bottom: 60px;">1. Education details: your most recent 2 educational certificates</h2>

	<h3>Education: your highest education</h3><i> PENDIDIKAN (TAHAP PENDIDIKAN YANG TERTINGGI)</i>
	
{!! Form::open(['action' => 'EducationController@store' , 'data-parseley-validate'=> '']) !!} 
    
    {{form::label ('school', '* 1.  School name/ Nama Sekolah:')}}
    {{form::text ('school', null, array('class' => 'form-control', 'required' => '')) }}

  	{{form::label ('start_date', '*2. Start Date/Tempoh Mula::')}}
  	{{form::date ('start_date', null, array('class' => 'form-control', 'required' => ''))}}

  	{{form::label ('end_date', '*3. End Date/Tempoh Tamal::')}}
  	{{form::date ('end_date', null, array('class' => 'form-control','required' => ''))}}

  	{{form::label ('cert', '*4. Certificate Obtained/Sijil yang Pernah Anda Dapat:')}}
  	{{form::text ('cert', null, array('class' => 'form-control','required' => ''))}}

  	{{form::label ('cgpa', '*5. CGPA Obtained/<Gred; Pencapaian GPA (jika ada):')}}
  	{{form::text ('cgpa', null, array('class' => 'form-control','required' => ''))}}

    {{Form::close()}}


  	<h3>Education</h3><i> PENDIDIKAN </i>
    {!! Form::open(['action' => 'EducationController@storeSecondForm' , 'data-parseley-validate'=> '']) !!} 

    {{form::label ('school', '1.  School name/ Nama Sekolah:')}}
    {{form::text ('school', null, array('class' => 'form-control')) }}

  	{{form::label ('start_date', '2. Start Date/Tempoh Mula:')}}
  	{{form::date ('start_date', null, array('class' => 'form-control'))}}

  	{{form::label ('end_date', '3. End Date/Tempoh Tamal::')}}
  	{{form::date ('end_date', null, array('class' => 'form-control'))}}

  	{{form::label ('cert', '4. Certificate Obtained/Sijil yang Pernah Anda Dapat:')}}
  	{{form::text ('cert', null, array('class' => 'form-control'))}}

  	{{form::label ('cgpa', '5. CGPA Obtained/<Gred; Pencapaian GPA (jika ada):')}}
  	{{form::text ('cgpa', null, array('class' => 'form-control'))}}

  	{{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block ' ))}}

	{{Form::close()}}

	<h4 style="color: red"> *Fields are mandatory </h4>

	@endsection

  	



  	
