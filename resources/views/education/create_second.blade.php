@extends ('Main')

@section ('content')
<a href="{{route('education.create')}}" class="btn btn-lg btn-default">Cancel</a>

    <h3>Add An Education Record</h3>
    
{!! Form::open(['action' => 'EducationController@storeSecondForm' , 'data-parseley-validate'=> '']) !!} 
    
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

    {{form::submit ('Submit', array ('class' => 'btn btn-success btn-lg btn-block ' ))}}

    {{Form::close()}}

@endsection